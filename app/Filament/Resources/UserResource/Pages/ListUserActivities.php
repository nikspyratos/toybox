<?php

declare(strict_types=1);

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

class ListUserActivities extends ListActivities
{
    protected static string $resource = UserResource::class;
}
