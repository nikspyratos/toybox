<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Filament\Widgets\VersionsWidget;
use Illuminate\Contracts\Support\Htmlable;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;

class HealthCheckResults extends BaseHealthCheckResults
{
    protected static ?string $title = 'Application Overview';
    protected static ?string $navigationIcon = ''; //Override default so the group can have icon instead

    public static function getNavigationGroup(): ?string
    {
        return 'Core';
    }

    public static function getNavigationLabel(): string
    {
        return 'Application Overview';
    }

    public function getHeading(): string|Htmlable
    {
        return 'Application Overview';
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
