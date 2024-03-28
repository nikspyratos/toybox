<?php

declare(strict_types=1);

namespace App\Filament\Resources\RoadmapItemResource\Pages;

use App\Filament\Resources\RoadmapItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRoadmapItems extends ManageRecords
{
    protected static string $resource = RoadmapItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
