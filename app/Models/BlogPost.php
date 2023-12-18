<?php

declare(strict_types=1);

namespace App\Models;

use App\Enumerations\BlogPostStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

class BlogPost extends Model
{
    use HasFactory, HasTags, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'status',
        'content',
        'seo_description',
        'category',
        'published_at',

    ];

    protected $attributes = [
        'status' => BlogPostStatus::DRAFT,
    ];

    protected $casts = [
        'status' => BlogPostStatus::class,
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getLiveUrl(): string
    {
        return route('blog-posts.show', ['BlogPost' => $this]);
    }
}
