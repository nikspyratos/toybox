<?php

declare(strict_types=1);

/**
 * Basic architecture quality tests
 * https://github.com/JonPurvis/pest-snippets/blob/main/arch-testing.md
 */
uses()->group('architecture');

test('Application files use strict types')
    ->expect('App')
    ->toUseStrictTypes();

test('The codebase does not reference env variables outside of config files')
    ->expect('env')
    ->not->toBeUsed();

test('The codebase does not contain any debugging code')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'print_r'])
    ->not->toBeUsed();

test('Mailables are extending the correct class')
    ->expect('App\Mail')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend('Illuminate\Mail\Mailable');
//    ->classes->toImplement('Illuminate\Contracts\Queue\ShouldQueue'); // optional

test('Models are extending the correct class')
    ->expect('App\Models')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend('Illuminate\Database\Eloquent\Model');

test('Providers are extending the correct class')
    ->expect('App\Providers')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend('Illuminate\Support\ServiceProvider')
    ->classes->toImplementNothing();

test('Requests are extending the correct class')
    ->expect('App\Http\Requests')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend('Illuminate\Foundation\Http\FormRequest');

test('Commands are extending the correct class')
    ->expect('App\Console\Commands')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend('Illuminate\Console\Command');

test('Tests are using strict types and have the correct suffix')
    ->expect('Tests')
    ->toUseStrictTypes()
    ->and('Tests\Feature')->toHaveSuffix('Test')
    ->and('Tests\Unit')->toHaveSuffix('Test');
