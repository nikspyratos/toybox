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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Override;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     */
    public const HOME = '/dashboard';

    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
        $this->bootDatabase();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->isProduction()) {
            Model::preventLazyLoading();
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }

        $this->bootAuth();
        $this->bootEvent();
        $this->bootRoute();
    }

    public function bootDatabase(): void
    {
        $connections = ['sqlite', 'cache_db', 'pulse_db', 'queue_db', 'telescope_db'];
        foreach ($connections as $connection) {
            DB::connection($connection)
                ->statement(
                    '
                PRAGMA synchronous = NORMAL;
                PRAGMA mmap_size = 134217728; -- 128 megabytes
                PRAGMA cache_size = 1000000000;
                PRAGMA foreign_keys = true;
                PRAGMA busy_timeout = 5000;
                PRAGMA temp_store = memory;
                '
                );
        }
    }

    public function bootAuth(): void
    {
        $isAdminCallback = static fn (User $user) => $user->is_admin;
        Gate::define('viewPulse', $isAdminCallback);
        Gate::define('viewTelescope', $isAdminCallback);
    }

    public function bootEvent(): void
    {
    }

    public function bootRoute(): void
    {
        RateLimiter::for('api', static fn (Request $request) => Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()));

    }
}
