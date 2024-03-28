<?php

declare(strict_types=1);

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Override;
use STS\FilamentImpersonate\Pages\Actions\Impersonate;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            Impersonate::make()
                ->redirectTo(route('dashboard')),
            EditAction::make(),
        ];
    }
}
