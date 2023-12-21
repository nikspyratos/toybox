<?php

declare(strict_types=1);

namespace App\Models;

use App\Enumerations\Role;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable implements FilamentUser, HasAvatar, MustVerifyEmail
{
    use HasApiTokens, HasFactory, LogsActivity, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'profile_photo_path',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'role' => Role::class,
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'role' => Role::USER,
    ];

    public function getIsAdminAttribute(): bool
    {
        return $this->role === Role::ADMIN;
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        /** @phpstan-ignore-next-line */
        return $this->profile_photo_url;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
