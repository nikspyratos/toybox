<?php

declare(strict_types=1);

namespace App\Filament\Resources\FeedbackResource\Pages;

use App\Filament\Resources\FeedbackResource;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;
use Override;

class ManageFeedback extends ManageRecords
{
    protected static string $resource = FeedbackResource::class;

    #[Override]
    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'pending_review' => Tab::make()
                ->modifyQueryUsing(static fn (Builder $builder) => $builder->where('reviewed', false)),
            'reviewed' => Tab::make()
                ->modifyQueryUsing(static fn (Builder $builder) => $builder->where('reviewed', true)),
            'testimonial' => Tab::make()
                ->modifyQueryUsing(static fn (Builder $builder) => $builder->where('consented_testimonial', true)->where('reviewed', true)),
        ];
    }

    #[Override]
    public function getDefaultActiveTab(): string|int|null
    {
        return 'pending_review';
    }

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
