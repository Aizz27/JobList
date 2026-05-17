<?php

namespace Database\Factories;

use App\Models\JobList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobList>
 */
class JobListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition():array
    {
        return [
        // Generates a random Latin sentence and removes the period at the end
        'title' => rtrim($this->faker->sentence(rand(4, 9)), '.'),
        
        // Generates a random float/decimal between 50,000 and 150,000
        'salary' => $this->faker->randomFloat(2, 50000, 150000),
        ];
    }
}