<?php

namespace Database\Factories;

use App\Models\UserTask;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserTask>
 */
class UserTaskFactory extends Factory
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
            'user_id'   => rand(1, 10),
            'task_id'   => rand(1, 30),
            'due_date'  => now()->addDays(rand(1, 10)),
            'remarks'   => fake()->sentence(),
            'status_id' => rand(1, 5),
        ];
    }
}
