<?php

namespace Database\Factories;
use App\Models\Room;
use App\Models\Guest;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'room_id' => Room::inRandomOrder()->first()->id,
        'guest_id' => Guest::inRandomOrder()->first()->id,
        'check_in' => fake()->dateTimeBetween('-1 month', 'now'),
        'check_out' => fake()->dateTimeBetween('now', '+1 month'),
    ];
}

}
