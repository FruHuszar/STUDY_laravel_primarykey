<?php

namespace Database\Factories;

use App\Models\Airline;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d'),
            'airline_id' => Airline::inRandomOrder()->first()->id,
            'limit' => fake()->numberBetween(50, 300),
        ];
    }
}