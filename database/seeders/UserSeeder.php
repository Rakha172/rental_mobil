<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' => 'ahmad',
            'gender' => 'male',
            'phone_number' => '123456',
            'address' => 'margaasih',
            'id_card_photo' => 'margaasih',
            'driver_licence_photo' => 'margaasih',
            'email' => 'ahmad@gmail.com',
            'password' => '1234567',
        ]);
    }
}
