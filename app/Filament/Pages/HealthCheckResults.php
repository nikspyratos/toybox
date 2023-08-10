<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use Illuminate\Contracts\Support\Htmlable;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;

class HealthCheckResults extends BaseHealthCheckResults
{
    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    public static function getNavigationGroup(): ?string
    {
        return 'Core';
    }

    public function getHeading(): string|Htmlable
    {
        return 'Health Check Results';
    }

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            // TODO: Optimise, clear cache, download database, backups(?)
        ]);
    }
}
