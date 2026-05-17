<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\JobListing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create 1 distinct Admin account you can reliably log in with
        User::factory()->admin()->create([
            'name' => 'System Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
        ]);

        // 2. Create some standard users
        User::factory()->count(10)->create();

        // 3. Re-seed your job listings from our previous fix
        JobListing::factory()->count(40)->create();
    }
}