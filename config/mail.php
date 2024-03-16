<?php

declare(strict_types=1);

return [

    'mailers' => [
        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],
    ],

    'admin_address' => env('MAIL_ADMIN_ADDRESS'),

];
