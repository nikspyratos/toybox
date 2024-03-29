<?php

declare(strict_types=1);

namespace App\Enumerations;

enum Database: string
{
    case MAIN = 'database';
    case ACTIVITY_LOG = 'activities';
    case CACHE = 'cache';
    case PULSE = 'pulse';
    case QUEUE = 'queue';
    case TELESCOPE = 'telescope';
}
