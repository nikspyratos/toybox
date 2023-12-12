<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Filament\Widgets\VersionsWidget;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;

class HealthCheckResults extends BaseHealthCheckResults
{
    protected static ?string $title = 'Health Checks';
    protected static ?string $navigationIcon = ''; //Override default so the group can have icon instead

    protected static ?string $slug = 'health-checks';

    public static function getNavigationGroup(): ?string
    {
        return 'Core';
    }

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            // TODO: Optimise, clear cache, download database, backups(?)
        ]);
    }

    protected function getHeaderWidgets(): array
    {
        return [
            VersionsWidget::class,
        ];
    }
}
