<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [


    'company_name' => env('COMPANY_NAME', 'Laravel'),

    'contact-email' => env('CONTACT_EMAIL'),

    'default_robots' => 'max-snippet:-1,max-image-preview:large,max-video-preview:-1',

    'default_description' => 'A TALL stack starter kit for solopreneurs',

];
