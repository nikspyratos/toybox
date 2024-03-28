<?php

declare(strict_types=1);

namespace App\Actions\Socialstream;

use JoelButcher\Socialstream\Contracts\ResolvesSocialiteUsers;
use JoelButcher\Socialstream\Socialstream;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;
use Override;

class ResolveSocialiteUser implements ResolvesSocialiteUsers
{
    /**
     * Resolve the user for a given provider.
     */
    #[Override]
    public function resolve(string $provider): User
    {
        $user = Socialite::driver($provider)->user();

        if (Socialstream::generatesMissingEmails()) {
            $user->email = $user->getEmail() ?? (sprintf('%s@%s', $user->id, $provider) . config('app.domain'));
        }

        return $user;
    }
}
