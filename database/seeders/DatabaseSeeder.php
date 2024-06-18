<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'superadmin',
            'password' => bcrypt('password'),
            'status' => 'active',
            'role_id' => 1
        ]);

        User::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'status' => 'active',
            'role_id' => 2
        ]);
    }
}
