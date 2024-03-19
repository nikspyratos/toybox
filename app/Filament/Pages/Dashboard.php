<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Enumerations\Database;
use App\Helpers\EnumHelper;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Pages\Dashboard as BasePage;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Support\Facades\Storage;

class Dashboard extends BasePage
{
    public function getWidgets(): array
    {
        return [
            AccountWidget::class,
            FilamentInfoWidget::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('download_database')
                ->label('Download Database')
                ->color('success')
                ->icon('heroicon-o-circle-stack')
                ->form([
                    Select::make('database')
                        ->options(EnumHelper::toOptionArray(Database::cases()))
                        ->required(),
                ])
                ->action(function (array $data) {
                    if (Database::tryFrom($data['database'])) {
                        return Storage::disk('root')->download('database/' . $data['database'] . '.sqlite');
                    }
                })
                ->visible(fn () => auth()->user()->is_admin),
        ];
    }
}
