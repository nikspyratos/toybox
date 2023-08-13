<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use Composer\InstalledVersions;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VersionsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Laravel', InstalledVersions::getPrettyVersion('laravel/framework')),
            Stat::make('Filament', InstalledVersions::getPrettyVersion('filament/filament')),
            Stat::make('PHP', PHP_VERSION),
        ];
    }
}
