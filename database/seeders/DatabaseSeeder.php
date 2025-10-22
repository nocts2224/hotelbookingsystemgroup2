<?php

namespace Database\Seeders;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Booking;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Room::factory(10)->create();
        // Guest::factory(10)->create();
        // Booking::factory(30)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
