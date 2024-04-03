<?php

declare(strict_types=1);

namespace App\Enumerations;

enum Database: string
{
    case MAIN = 'database';
    case CACHE = 'cache';
    case PULSE = 'pulse';
    case QUEUE = 'queue';
    case TELESCOPE = 'telescope';
}
