<?php

declare(strict_types=1);

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogPost extends EditRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return self::getResource()::getUrl('edit', ['record' => $this->getRecord()]);
    }

    protected function getPreviewModalView(): ?string
    {
        return 'pages.blog.[BlogPost:slug]';
    }

    protected function getPreviewModalDataRecordKey(): ?string
    {
        return 'content';
    }

    protected function mutatePreviewModalData(array $data): array
    {
        $data['blogPost'] = $this->getRecord();
        $data['blogPost']->published_at = now();

        return $data;
    }
}
