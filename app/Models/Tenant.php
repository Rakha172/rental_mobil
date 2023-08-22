<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'tenant';
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
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'image', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'name', 'id');
    }


}
