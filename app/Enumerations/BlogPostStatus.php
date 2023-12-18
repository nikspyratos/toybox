<?php

declare(strict_types=1);

namespace App\Enumerations;

enum BlogPostStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case HIDDEN = 'hidden';
}
