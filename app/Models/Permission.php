<?php

declare(strict_types=1);

namespace App\Models;

use Spatie\Permission\Traits\RefreshesPermissionCache;

class Permission extends \Spatie\Permission\Models\Permission
{
    use RefreshesPermissionCache;

}
