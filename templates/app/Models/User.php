<?php

namespace App\Models;

use Enumerations\Role;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use JoelButcher\Socialstream\HasConnectedAccounts;
use JoelButcher\Socialstream\SetsProfilePhotoFromUrl;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
//use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Override;

class User extends Authenticatable implements FilamentUser, MustVerifyEmail
{
    use HasApiTokens;
    use HasConnectedAccounts;
    use HasFactory;
    use HasProfilePhoto {
        HasProfilePhoto::profilePhotoUrl as getPhotoUrl;
    }
    //use HasTeams;
    use Notifiable;
    use SetsProfilePhotoFromUrl;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $attributes = [
        'role' => Role::USER,
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function profilePhotoUrl(): Attribute
    {
        return filter_var($this->profile_photo_path, FILTER_VALIDATE_URL)
            ? Attribute::get(fn () => $this->profile_photo_path)
            : $this->getPhotoUrl();
    }

    public function isAdmin(): Attribute
    {
        return Attribute::get(get: fn () => $this->role === Role::ADMIN);
    }

    #[Override]
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return null;
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'role' => Role::class,
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
