<?php

declare(strict_types=1);

namespace App\Enumerations;

enum Role: string
{
    case SUPER_ADMIN = 'super admin';
    case ADMIN = 'admin';
    case USER = 'user';
}
