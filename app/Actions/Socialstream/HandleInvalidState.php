<?php

declare(strict_types=1);

namespace App\Actions\Socialstream;

use Illuminate\Http\Response;
use JoelButcher\Socialstream\Contracts\HandlesInvalidState;
use Laravel\Socialite\Two\InvalidStateException;
use Override;

class HandleInvalidState implements HandlesInvalidState
{
    /**
     * Handle an invalid state exception from a Socialite provider.
     */
    #[Override]
    public function handle(InvalidStateException $invalidStateException): Response
    {
        throw $invalidStateException;
    }
}
