<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'flight_id' => Flight::inRandomOrder()->first()->id,
            'evaluation' => fake()->randomElement(['kiváló', 'jó', 'közepes', 'rossz']),
        ];
    }
}