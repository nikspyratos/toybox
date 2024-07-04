<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Enumerations\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class CreateSuperAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin-user {--name=} {--email=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an administrative user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->option('name');
        $email = $this->option('email');
        $password = $this->option('password');

        if (!$name) {
            $name = text(
                label: 'What is your name?',
                required: true
            );
        }
        if (!$email) {
            $email = text(
                label:    'What is your email?',
                required: true
            );
        }
        if (!$password) {
            $password = password(
                label:       'What is your password?',
                placeholder: 'Minimum 8 characters...',
                required:    true
            );
        }
        User::firstOrCreate(
            [
                'email' => $email,
            ],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'email_verified_at' => now(),
                'role' => Role::SUPER_ADMIN,
            ]
        );
        $this->info('Successfully created user - you may now log in at /admin and access Telescope at /telescope');
    }
}
