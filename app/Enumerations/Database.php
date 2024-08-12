<?php

declare(strict_types=1);

namespace App\Enumerations;

enum Database: string
{
    case APP = 'sqlite';
    case CACHE = 'cache_db';
    case QUEUE = 'queue_db';
    case PULSE = 'pulse_db';
    case TELESCOPE = 'telescope_db';
}
