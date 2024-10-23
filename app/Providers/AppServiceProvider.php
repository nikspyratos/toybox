<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        foreach (config('database.connections') as $connectionName => $connection) {
            if ($connection['driver'] === 'sqlite') {
                DB::connection($connectionName)
                    ->statement(
                        '
                        PRAGMA synchronous = NORMAL;
                        PRAGMA mmap_size = 134217728; -- 128 megabytes
                        PRAGMA cache_size = 1000000000;
                        PRAGMA foreign_keys = ON;
                        PRAGMA incremental_vacuum;
                        PRAGMA busy_timeout = 5000;
                        PRAGMA temp_store = MEMORY;
                    '
                    );
            }
        }
    }

    public function boot(): void
    {
        if (! $this->app->isProduction()) {
            Model::shouldBeStrict();
        }

        $isAdminCallback = static fn (User $user) => $user->is_admin;
        Gate::define('viewPulse', $isAdminCallback);
        Gate::define('viewTelescope', $isAdminCallback);

        RateLimiter::for('api', static fn (Request $request) => Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()));
    }
}
