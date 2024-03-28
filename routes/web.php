<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(static function (): void {
    Route::get('dashboard', static fn () => view('dashboard'))->name('dashboard');
});
