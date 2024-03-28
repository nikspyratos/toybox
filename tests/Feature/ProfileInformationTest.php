<?php

declare(strict_types=1);

use App\Models\User;
use Laravel\Jetstream\Http\Livewire\UpdateProfileInformationForm;
use Livewire\Livewire;

test('current profile information is available', function (): void {
    $this->actingAs($user = User::factory()->create());

    $testable = Livewire::test(UpdateProfileInformationForm::class);

    expect($testable->state['name'])->toEqual($user->name);
    expect($testable->state['email'])->toEqual($user->email);
});

test('profile information can be updated', function (): void {
    $this->actingAs($user = User::factory()->create());

    Livewire::test(UpdateProfileInformationForm::class)
        ->set('state', ['name' => 'Test Name', 'email' => 'test@example.com'])
        ->call('updateProfileInformation');

    expect($user->fresh())
        ->name->toEqual('Test Name')
        ->email->toEqual('test@example.com');
});
