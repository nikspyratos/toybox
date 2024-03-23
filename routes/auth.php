<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::redirect('.well-known/change-password', '/forgot-password');
});
