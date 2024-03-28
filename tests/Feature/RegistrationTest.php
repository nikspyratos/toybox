<?php

declare(strict_types=1);

use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;

test('registration screen can be rendered', function (): void {
    $response = $this->get('/register');

    $response->assertStatus(200);
})->skip(static fn (): bool => ! Features::enabled(Features::registration()), 'Registration support is not enabled.');

test('registration screen cannot be rendered if support is disabled', function (): void {
    $response = $this->get('/register');

    $response->assertStatus(404);
})->skip(static fn () => Features::enabled(Features::registration()), 'Registration support is enabled.');

test('new users can register', function (): void {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
})->skip(static fn (): bool => ! Features::enabled(Features::registration()), 'Registration support is not enabled.');
