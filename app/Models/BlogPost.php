<?php

declare(strict_types=1);

namespace App\Models;

use App\Enumerations\BlogPostStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;

class BlogPost extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'status',
        'content',
        'seo_description',
        'tags',
        'category',
        'published_at',
    ];

    protected $attributes = [
        'status' => BlogPostStatus::DRAFT,
    ];

    public function scopePublished(Builder $builder): void
    {
        $builder->whereNotNull('published_at');
    }

    #[Override]
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function getLiveUrl(): string
    {
        return route('blog-posts.show', ['BlogPost' => $this]);
    }

    public function getStructuredData(): string
    {
        return json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $this->getLiveUrl(),
            ],
            'datePublished' => $this->published_at?->toIso8601String(),
            'dateModified' => $this->updated_at->toIso8601String(),
            'headline' => $this->title,
            'author' => [
                '@type' => 'Person',
                'name' => $this->author->name,
            ],
            'description' => $this->seo_description,

        ]);
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'status' => BlogPostStatus::class,
            'published_at' => 'datetime',
            'tags' => 'array',
        ];
    }
}
