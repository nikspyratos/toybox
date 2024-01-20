<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Stub
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $isAdminCallback = function (User $user) {
            return $user->is_admin;
        };
        Gate::define('viewPulse', $isAdminCallback);
        Gate::define('viewTelescope', $isAdminCallback);
    }
}
