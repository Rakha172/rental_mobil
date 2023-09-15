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
            'image' => 'upload\vehicle\1694594782_car3jpg',
            'vehicle_type' => 'Sport',
            'brand' => 'Honda',
            'color' => 'Black',
            'passenger_capacity' => rand(1, 10),
        ];
    }
}
