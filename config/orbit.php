<?php

declare(strict_types=1);

return [

    'default' => env('ORBIT_DEFAULT_DRIVER', 'md'),

    'drivers' => [
        'md' => Orbit\Drivers\Markdown::class,
        'json' => Orbit\Drivers\Json::class,
        'yaml' => Orbit\Drivers\Yaml::class,
    ],

    'paths' => [
        'content' => base_path('resources/markdown/'),
        'cache' => storage_path('framework/cache/orbit'),
    ],

    'group_order',

];
