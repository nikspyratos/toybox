<?php

declare(strict_types=1);

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
    App\Providers\FolioServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    Lab404\Impersonate\ImpersonateServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    App\Providers\SocialstreamServiceProvider::class,
];
