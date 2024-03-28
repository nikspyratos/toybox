<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'feedback',
        'consented_testimonial',
        'edited_feedback',
        'reviewed',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function roadmapItems(): HasMany
    {
        return $this->hasMany(RoadmapItem::class);
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'consented_testimonial' => 'boolean',
            'reviewed' => 'boolean',
        ];
    }
}
