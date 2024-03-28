<?php

declare(strict_types=1);

namespace App\Actions\Socialstream;

use JoelButcher\Socialstream\Contracts\GeneratesProviderRedirect;
use Laravel\Socialite\Facades\Socialite;
use Override;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GenerateRedirectForProvider implements GeneratesProviderRedirect
{
    /**
     * Generates the redirect for a given provider.
     */
    #[Override]
    public function generate(string $provider): RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }
}
