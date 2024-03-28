<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', static fn ($user, $id): bool => (int) $user->id === (int) $id);
