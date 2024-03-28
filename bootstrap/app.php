<?php

declare(strict_types=1);

use App\Http\Middleware\ComingSoon;
use App\Providers\AppServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withProviders()
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(static function (Middleware $middleware) : void {
        $middleware->redirectGuestsTo(static fn() => route('login'));
        $middleware->redirectUsersTo(AppServiceProvider::HOME);
        $middleware->throttleApi();
        $middleware->appendToGroup('web', [
            ComingSoon::class
        ]);
    })
    ->withExceptions(static function (Exceptions $exceptions) : void {
        //
    })->create();
