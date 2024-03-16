<?php

declare(strict_types=1);

use Illuminate\Support\Str;

return [

    'connections' => [
        'pulse' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('PULSE_DATABASE', database_path('pulse.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => false, // disable to preserve original behavior for existing applications
    ],

];
