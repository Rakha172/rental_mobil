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
        DB::table('user')->insert([
            'nama_lengkap' => 'user',
            'email' => 'user@gmail.com',
            'password' => '123',
            'confirm_password' => '123'
        ]);
    }
}
