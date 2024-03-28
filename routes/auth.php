<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use JoelButcher\Socialstream\Http\Controllers\OAuthController;

Route::middleware('guest')->group(static function (): void {
    Route::redirect('.well-known/change-password', '/forgot-password');
});

Route::group(['middleware' => config('socialstream.middleware', ['web'])], static function (): void {
    Route::get('oauth/{provider}', [OAuthController::class, 'redirect'])->name('oauth.redirect');
    Route::match(['get', 'post'], '/oauth/{provider}/callback', [OAuthController::class, 'callback'])->name('oauth.callback');
});
