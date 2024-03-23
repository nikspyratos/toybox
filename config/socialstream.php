<?php

declare(strict_types=1);

use JoelButcher\Socialstream\Providers;

return [
    'middleware' => ['web'],
    'prompt' => 'Or Login Via',
    'providers' => [
        // Providers::github(),
    ],
    'component' => 'socialstream::components.socialstream',
];
