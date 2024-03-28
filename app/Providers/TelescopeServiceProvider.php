<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Laravel\Telescope\IncomingEntry;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;
use Override;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
        // Telescope::night();

        $this->hideSensitiveRequestDetails();

        Telescope::filter(function (IncomingEntry $incomingEntry): bool {
            if ($this->app->environment('local')) {
                return true;
            }

            if ($incomingEntry->isReportableException()) {
                return true;
            }

            if ($incomingEntry->isFailedRequest()) {
                return true;
            }

            if ($incomingEntry->isFailedJob()) {
                return true;
            }

            if ($incomingEntry->isScheduledTask()) {
                return true;
            }

            return $incomingEntry->hasMonitoredTag();
        });
    }

    /**
     * Prevent sensitive request details from being logged by Telescope.
     */
    protected function hideSensitiveRequestDetails(): void
    {
        if ($this->app->environment('local')) {
            return;
        }

        Telescope::hideRequestParameters(['_token']);

        Telescope::hideRequestHeaders([
            'cookie',
            'x-csrf-token',
            'x-xsrf-token',
        ]);
    }

    /**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */
    #[Override]
    protected function gate(): void
    {
        Gate::define('viewTelescope', static fn (User $user) => $user->is_admin);
    }
}
