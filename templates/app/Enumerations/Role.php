<?php

declare(strict_types=1);

namespace Enumerations;

enum Role: string
{
    case SUPER_ADMIN = 'super admin';
    case ADMIN = 'admin';
    case USER = 'user';
}
