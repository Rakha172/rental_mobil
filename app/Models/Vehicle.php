<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';
    protected $fillabel = [
        'image',
        'vehicle_type',
        'brand',
        'color',
        'passenger_capacity',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
