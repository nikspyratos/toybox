<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Middleware\ComingSoon;
use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/pages'))
            ->uri('/')
            ->middleware([
                '*' => [
                    ComingSoon::class,
                ],
            ]);
    }
}
