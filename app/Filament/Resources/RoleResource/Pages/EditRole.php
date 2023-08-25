<?php

declare(strict_types=1);

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\PermissionRegistrar;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    public function afterSave(): void
    {
        if (! $this->record instanceof Role) {
            return;
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function getRelationManagers(): array
    {
        return [];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
