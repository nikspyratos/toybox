<?php

declare(strict_types=1);

namespace App\Models;

use App\Enumerations\RoadmapItemStatus;
use App\Models\Interfaces\Votable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Override;

class RoadmapItem extends Model implements Votable
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        'published',
        'votes',
        'suggester_id',
        'feedback_id',
    ];

    protected $attributes = [
        'status' => RoadmapItemStatus::UNPLANNED,
        'published' => false,
    ];

    public function scopePublished(Builder $builder): void
    {
        $builder->where('published', true);
    }

    public function suggester(): BelongsTo
    {
        return $this->belongsTo(User::class, 'suggester_id');
    }

    public function feedback(): BelongsTo
    {
        return $this->belongsTo(Feedback::class);
    }

    public function voteRecords(): MorphMany
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    #[Override]
    public function handleVoteUpdate(Vote $vote): void
    {
        if ($vote->vote_up) {
            $this->votes++;
        } else {
            $this->votes--;
        }

        $this->save();
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'status' => RoadmapItemStatus::class,
        ];
    }
}
