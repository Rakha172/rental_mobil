<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillabel = [
        'mobile',
        'vehicle_type',
        'brand',
        'model',
        'color',
        'passenger_capacity',
        'rental_price',
        'created_at',
        'updated_at'
    ];
}
