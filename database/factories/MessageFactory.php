<?php

namespace Database\Factories;

use App\Models\Chat;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'chat_id' => Chat::factory(),
            'body' => fake()->paragraphs(rand(1, 3), true),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
