<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doc>
 */
class DocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Test Doc',
            'blocks' => 'Test content',
            'user_id' => 1,
            'version' => '1.0.0',
            'time' => fake()->dateTime()->format("H:i:s"),
        ];
    }
}
