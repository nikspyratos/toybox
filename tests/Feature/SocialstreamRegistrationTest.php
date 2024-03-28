<?php

declare(strict_types=1);
use JoelButcher\Socialstream\Providers;
use Laravel\Fortify\Features as FortifyFeatures;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

/**
 * @return array<int, array<int, string>>
 */
dataset('socialiteProvidersDataProvider', static fn (): array => [
    [Providers::bitbucket()],
    [Providers::facebook()],
    [Providers::github()],
    [Providers::gitlab()],
    [Providers::google()],
    [Providers::linkedin()],
    [Providers::linkedinOpenId()],
    [Providers::slack()],
    [Providers::twitterOAuth1()],
    [Providers::twitterOAuth2()],
]);
test('users get redirected correctly', function (string $provider): void {
    if (! Providers::enabled($provider)) {
        $this->markTestSkipped(sprintf('Registration support with the %s provider is not enabled.', $provider));
    }

    config()->set('services.' . $provider, [
        'client_id' => 'client-id',
        'client_secret' => 'client-secret',
        'redirect' => sprintf('http://localhost/oauth/%s/callback', $provider),
    ]);

    $response = $this->get('/oauth/' . $provider);
    $response->assertRedirectContains($provider);
})->with('socialiteProvidersDataProvider');
test('users can register using socialite providers', function (string $socialiteProvider): void {
    if (! FortifyFeatures::enabled(FortifyFeatures::registration())) {
        $this->markTestSkipped('Registration support is not enabled.');
    }

    if (! Providers::enabled($socialiteProvider)) {
        $this->markTestSkipped(sprintf('Registration support with the %s provider is not enabled.', $socialiteProvider));
    }

    $user = (new User)
        ->map([
            'id' => 'abcdefgh',
            'nickname' => 'Jane',
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'avatar' => null,
            'avatar_original' => null,
        ])
        ->setToken('user-token')
        ->setRefreshToken('refresh-token')
        ->setExpiresIn(3600);

    $provider = Mockery::mock('Laravel\\Socialite\\Two\\' . $socialiteProvider . 'Provider');
    $provider->shouldReceive('user')->once()->andReturn($user);

    Socialite::shouldReceive('driver')->once()->with($socialiteProvider)->andReturn($provider);

    session()->put('socialstream.previous_url', route('register'));

    $response = $this->get(sprintf('/oauth/%s/callback', $socialiteProvider));

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
})->with('socialiteProvidersDataProvider');
