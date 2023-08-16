<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $fillabel = [
        'nik_user',
        'plat_mobil',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'total_hari',
        'total_harga',
        'transaksi_pembayaran',
        'created_at',
        'updated_at'
    ];

    use HasFactory;
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'plat_mobil', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'nik_user', 'id');
    }


}
