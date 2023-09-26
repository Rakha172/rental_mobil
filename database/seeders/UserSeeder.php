<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(50)->create();
        User::create([
            'name' => 'admin',
            'role' => 'admin',
            'gender' => 'admin',
            'phone_number' => '089',
            'address' => 'admin address',
            'id_card_photo' => 'admin',
            'driver_licence_photo' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
    }
}
