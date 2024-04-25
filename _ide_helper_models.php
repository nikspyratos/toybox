<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property-read mixed $token
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ConnectedAccountFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConnectedAccount query()
 */
	class ConnectedAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property \App\Enumerations\Role $role
 * @property mixed $password
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \JoelButcher\Socialstream\ConnectedAccount> $connectedAccounts
 * @property-read int|null $connected_accounts_count
 * @property-read bool $is_admin
 * @property-read string $get_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

