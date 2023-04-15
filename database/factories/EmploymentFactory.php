<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employment>
 */
class EmploymentFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence,
            'employer'=> $this->faker->sentence,
            'url' => $this->faker->url,
            'content' => $this->faker->paragraph,
            'started_at'=> $this->faker->dateTimeThisMonth,
            'ended_at'=> $this->faker->dateTimeThisMonth,
        ];
    }
}
