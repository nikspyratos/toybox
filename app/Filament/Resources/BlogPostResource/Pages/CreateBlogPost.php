<?php

declare(strict_types=1);

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Resources\Pages\CreateRecord;
use Override;
use Pboivin\FilamentPeek\Pages\Actions\PreviewAction;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

class CreateBlogPost extends CreateRecord
{
    use HasPreviewModal;

    protected static string $resource = BlogPostResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            PreviewAction::make(),
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

    protected function mutatePreviewModalData(array $data): array
    {
        $blogPost = $data['content'];
        $blogPost->created_at = now();
        $blogPost->updated_at = now();
        $blogPost->published_at = now();
        $data['blogPost'] = $blogPost;

        return $data;
    }
}
