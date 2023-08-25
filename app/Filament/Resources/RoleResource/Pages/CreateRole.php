<?php

declare(strict_types=1);

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Resources\Pages\CreateRecord;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\PermissionRegistrar;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    public function afterSave(): void
    {
        if (! $this->record instanceof Role) {
            return;
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
