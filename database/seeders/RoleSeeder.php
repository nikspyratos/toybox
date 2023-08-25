<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(['name' => Role::USER, 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => Role::ADMIN, 'guard_name' => 'web']);
    }
}
