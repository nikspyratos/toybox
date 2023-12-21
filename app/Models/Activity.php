<?php

declare(strict_types=1);

namespace App\Models;

use Spatie\Activitylog\Models\Activity as BaseActivity;

class Activity extends BaseActivity
{
    //This currently just exists to make DI work for model-dependent things like `artisan make:abc`
    public function getSubjectTitleAttribute(): string
    {
        if ($this->subject_type === User::class) {
            return $this->subject->fullname;
        }

        return '';
    }
}
