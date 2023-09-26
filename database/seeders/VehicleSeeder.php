<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'image' => 'public/images/car3',
            'name' => 'Civic',
            'vehicle_type' => 'Sport',
            'brand' => 'Honda',
            'color' => 'Black',
            'passenger_capacity' => '4',
            'status_pesanan' => 'tersedia',
        ]);
    }
}
