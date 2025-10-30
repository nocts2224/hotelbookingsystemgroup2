<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'room_number' => strtoupper(fake()->bothify('R###')),
        'type' => fake()->randomElement(['Single', 'Double', 'Suite']),
        'price_per_night' => fake()->randomFloat(2, 50, 300),
        'availability' => fake()->boolean(70), // 70% chance it's available
    ];
}

}
