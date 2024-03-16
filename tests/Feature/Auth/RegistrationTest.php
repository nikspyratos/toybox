<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use App\Providers\AppServiceProvider;
use App\Providers\RouteServiceProvider;
use Livewire\Volt\Volt;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response
        ->assertSeeVolt('pages.auth.register')
        ->assertOk();
});

test('new users can register', function () {
    $component = Volt::test('pages.auth.register')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('password', 'password')
        ->set('password_confirmation', 'password');

    $component->call('register');

    $component->assertRedirect(AppServiceProvider::HOME);

    $this->assertAuthenticated();
});
