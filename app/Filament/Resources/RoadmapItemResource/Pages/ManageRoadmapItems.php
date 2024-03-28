<?php

declare(strict_types=1);

namespace App\Filament\Resources\RoadmapItemResource\Pages;

use App\Filament\Resources\RoadmapItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Override;

class ManageRoadmapItems extends ManageRecords
{
    protected static string $resource = RoadmapItemResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
