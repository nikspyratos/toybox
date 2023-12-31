<?php

declare(strict_types=1);

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

class ListBlogPosts extends ListRecords
{
    use HasPreviewModal;

    protected static string $resource = BlogPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getPreviewModalView(): ?string
    {
        return 'pages.blog.[BlogPost:slug]';
    }

    protected function getPreviewModalDataRecordKey(): ?string
    {
        return 'content';
    }
}
