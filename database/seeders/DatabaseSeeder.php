<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Airline;
use App\Models\Flight;
use App\Models\Travel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
        Airline::factory(5)->create();
        Flight::factory(20)->create();

        foreach (User::all() as $user) {
            $flights = Flight::inRandomOrder()->take(3)->get();

            foreach ($flights as $flight) {
                Travel::factory()->create([
                    'user_id' => $user->id,
                    'flight_id' => $flight->id,
                ]);
            }
        }
    }
}