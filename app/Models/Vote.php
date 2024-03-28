<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Override;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vote_up',
        'votable_type',
        'votable_id',
    ];

    public function votable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    #[Override]
    protected static function booted(): void
    {
        static::created(static function (Vote $vote): void {
            $vote->votable()->handleVoteUpdate($vote);
        });
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'vote_up' => 'boolean',
        ];
    }
}
