<?php

namespace Database\Factories;

use App\Models\Project;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "email" => fake()->email(),
            "bio" => fake()->realText(400),
            "skill" => fake()->numberBetween(1,100),
            "project_id" => Project::inRandomOrder()->first()->id,
        ];
    }
}
