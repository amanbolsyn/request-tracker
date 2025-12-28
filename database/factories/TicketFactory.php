<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(5),
            'body' => fake()->paragraph(),
            'status' => fake()->randomElement(['new','in progress','completed','rejected']),
            'category' => fake()->randomElement(['incident', 'service request', 'problem', 'change', 'request for information']),
            'prioraty' => fake()->randomElement(['critical', 'medium', 'low']),
        ];
    }
}
