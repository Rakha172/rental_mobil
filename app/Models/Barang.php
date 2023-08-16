<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillabel = [
        'plat_mobil',
        'jenis_kendaraan',
        'merek',
        'model',
        'warna',
        'kapasitas_penumpang',
        'harga_sewa',
        'created_at',
        'updated_at'
    ];
}
