<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    : array
    {
        return [
            'name'        => fake()->sentence(3),
            'description' => fake()->sentence(20),
            'due_date'    => now()->addDays(rand(1, 20)),
            'status_id'   => rand(1, 5),
        ];
    }
}
