<?php

declare(strict_types=1);

namespace App\Actions\Socialstream;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JoelButcher\Socialstream\Contracts\SetsUserPasswords;
use Laravel\Fortify\Rules\Password;
use Override;

class SetUserPassword implements SetsUserPasswords
{
    /**
     * Validate and update the user's password.
     */
    #[Override]
    public function set(mixed $user, array $input): void
    {
        Validator::make($input, [
            'password' => ['required', 'string', new Password, 'confirmed'],
        ])->validateWithBag('setPassword');

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
