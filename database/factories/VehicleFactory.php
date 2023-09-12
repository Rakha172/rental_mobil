<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'upload\vehicle\1694427168_car3jpg',
            'vehicle_type' => fake()->company(),
            'brand' => fake()->userAgent(),
            'color' => fake()->colorName,
            'passenger_capacity' => rand(1, 10),
        ];
    }
}
