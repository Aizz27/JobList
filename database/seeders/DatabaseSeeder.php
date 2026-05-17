<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\JobListing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->admin()->create([
            'name' => 'System Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::factory()->count(10)->create();

        JobListing::factory()->count(40)->create();
    }
} 