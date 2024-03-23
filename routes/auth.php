<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use JoelButcher\Socialstream\Http\Controllers\OAuthController;

Route::middleware('guest')->group(function () {
    Route::redirect('.well-known/change-password', '/forgot-password');
});

Route::group(['middleware' => config('socialstream.middleware', ['web'])], function () {
    Route::get('oauth/{provider}', [OAuthController::class, 'redirect'])->name('oauth.redirect');
    Route::match(['get', 'post'], '/oauth/{provider}/callback', [OAuthController::class, 'callback'])->name('oauth.callback');
});
