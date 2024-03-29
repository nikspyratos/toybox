<?php

declare(strict_types=1);

namespace App\Observers;

use App\Enumerations\BlogPostStatus;
use App\Models\BlogPost;

class BlogPostObserver
{
    /**
     * Handle the BlogPost "created" event.
     */
    public function created(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Handle the BlogPost "updated" event.
     */
    public function updating(BlogPost $blogPost): void
    {
        if ($blogPost->status === BlogPostStatus::PUBLISHED) {
            $blogPost->published_at = now();
        } else {
            $blogPost->published_at = null;
        }

    }

    /**
     * Handle the BlogPost "deleted" event.
     */
    public function deleted(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Handle the BlogPost "restored" event.
     */
    public function restored(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Handle the BlogPost "force deleted" event.
     */
    public function forceDeleted(BlogPost $blogPost): void
    {
        //
    }
}
