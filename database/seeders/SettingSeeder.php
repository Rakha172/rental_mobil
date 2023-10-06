<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

    public function run(): void
    {
        Setting::create([
            'name' => 'Novo Rental',
            'history' => 'Novo Rental meluncurkan situs web dan aplikasi pertama mereka, memudahkan pelanggan untuk memesan kendaraan secara online. Mereka juga memperkenalkan program loyalitas yang memberikan diskon dan manfaat eksklusif bagi pelanggan setia.',
            'image' => 'logo',
            'images' => 'logo',
            'location' => 'Indonesia,Jawa Barat,Bandung',
            'no_telp' => '+62 000 000 00',
            'email' => 'Support@gmail.com',
            'about_me' => 'Menyediakan berbagai pilihan unit mobil mulai dari Avanza, Innova Reborn, Hiace, Alphard, Luxury Car dan berbagai pilihan lainnya',
            'slogan' => '"Mobil Impian di Ujung Jari Anda"',
        ]);
    }
}