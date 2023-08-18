<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'renters';
    protected $fillabel = [
        'user_nik',
        'mobile',
        'rental_date',
        'return_date',
        'total_days',
        'total_price',
        'payment_transaction',
        'created_at',
        'updated_at'
    ];

    use HasFactory;
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'plat_mobil', 'id');
    }
    public function profile()
    {
        return $this->belongsTo(User::class, 'nik_user', 'id');
    }


}
