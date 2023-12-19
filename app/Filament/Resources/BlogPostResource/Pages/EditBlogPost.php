<?php

declare(strict_types=1);

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Pboivin\FilamentPeek\Pages\Actions\PreviewAction;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

class EditBlogPost extends EditRecord
{
    use HasPreviewModal;

    protected static string $resource = BlogPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            PreviewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->getRecord()]);
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

        return $data;
    }
}
