<?php

declare(strict_types=1);

namespace App\Models;

class Activity extends \Spatie\Activitylog\Models\Activity
{
    //This currently just exists to make DI work for model-dependent things like `artisan make:abc`
    public function getSubjectTitleAttribute(): string
    {
        if ($this->subject_type == User::class) {
            return $this->subject->fullname;
        }

        return '';
    }
}
