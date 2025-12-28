<?php

namespace Database\Factories;

use App\Models\Ticket;
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
            'status' => fake()->randomElement(Ticket::STATUS_LEVELS),
            'category' => fake()->randomElement(Ticket::CATEGORIES),
            'prioraty' => fake()->randomElement(Ticket::PRIORATY_LEVELS),
        ];
    }
}
