<?php

declare(strict_types=1);

namespace App\Enumerations;

enum RoadmapItemStatus: string
{
    case UNPLANNED = 'unplanned';

    case PLANNED = 'planned';
    case IN_PROGRESS = 'in progress';
    case DONE = 'done';
    case WONTFIX = "won't fix";
}
