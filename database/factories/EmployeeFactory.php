<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'emp_name' => fake()->name(),
            'email' => fake()->email(),
            'gender' => fake()->title(),
            'city' => fake()->city(),
            'status' => fake()->numberBetween(0,1)
        ];
    }
}
