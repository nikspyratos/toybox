<?php

declare(strict_types=1);

namespace App\Livewire\Profile;

use Laravel\Jetstream\Http\Livewire\ApiTokenManager as BaseApiTokenManager;
use Override;

class ApiTokenManager extends BaseApiTokenManager
{
    #[Override]
    public function render()
    {
        return view('profile.api-token-manager');
    }
}
