<?php

declare(strict_types=1);

/**
 * Basic architecture quality tests
 * https://github.com/JonPurvis/pest-snippets/blob/main/arch-testing.md
 */
uses()->group('architecture');

arch('Application files use strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('The codebase does not reference env variables outside of config files')
    ->expect('env')
    ->not->toBeUsed();

arch('The codebase does not contain any debugging code')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'print_r'])
    ->not->toBeUsed();

arch('Session data is not accessed in async jobs')
    ->expect(['session', 'auth', 'request'])
    ->each->not->toBeUsedIn(['App\Jobs', 'App\Console']);

arch('Mailables are extending the correct class')
    ->expect('App\Mail')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend(Illuminate\Mail\Mailable::class);
//    ->classes->toImplement('Illuminate\Contracts\Queue\ShouldQueue'); // optional

arch('Models are extending the correct class')
    ->expect('App\Models')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend(Illuminate\Database\Eloquent\Model::class);

arch('Providers are extending the correct class')
    ->expect('App\Providers')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend(Illuminate\Support\ServiceProvider::class)
    ->classes->toImplementNothing();

arch('Requests are extending the correct class')
    ->expect('App\Http\Requests')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend(Illuminate\Foundation\Http\FormRequest::class);

arch('Commands are extending the correct class')
    ->expect('App\Console\Commands')
    ->toBeClasses()
//    ->classes->toBeFinal() // optional
    ->classes->toExtend(Illuminate\Console\Command::class);

arch('Tests are using strict types and have the correct suffix')
    ->expect('Tests')
    ->toUseStrictTypes()
    ->and('Tests\Feature')->toHaveSuffix('Test')
    ->and('Tests\Unit')->toHaveSuffix('Test');
