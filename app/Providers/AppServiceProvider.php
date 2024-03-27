<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\BlogPost;
use App\Models\User;
use App\Observers\BlogPostObserver;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;

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
    public function register(): void
    {
        // Stub
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

        Feature::define('coming-soon', static fn (?User $user) => ! $user?->is_admin && config('app.coming_soon_enabled'));

        $this->bootAuth();
        $this->bootEvent();
        $this->bootRoute();
    }

    public function bootAuth(): void
    {
        $isAdminCallback = function (User $user) {
            return $user->is_admin;
        };
        Gate::define('viewPulse', $isAdminCallback);
        Gate::define('viewTelescope', $isAdminCallback);
    }

    public function bootEvent(): void
    {
        BlogPost::observe(BlogPostObserver::class);
    }

    public function bootRoute(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

    }
}
