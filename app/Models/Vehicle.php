<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';
    protected $fillabel = [
        'image',
        'name',
        'vehicle_type',
        'brand',
        'color',
        'passenger_capacity',
        'status_pesanan',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
