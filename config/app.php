<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\Filament\AdminPanelProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\VoltServiceProvider::class,
        App\Providers\FolioServiceProvider::class,
    ])->toArray(),

    'company_name' => env('COMPANY_NAME', 'Laravel'),

    'contact-email' => env('CONTACT_EMAIL'),

    'default_robots' => 'max-snippet:-1,max-image-preview:large,max-video-preview:-1',

    'default_description' => 'A TALL stack starter kit for solopreneurs',

];
