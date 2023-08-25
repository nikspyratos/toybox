<?php

declare(strict_types=1);

namespace App\Models;

use Spatie\Permission\Traits\RefreshesPermissionCache;

class Role extends \Spatie\Permission\Models\Role
{
    use RefreshesPermissionCache;

    public const USER = 'user';

    public const ADMIN = 'admin';
}
