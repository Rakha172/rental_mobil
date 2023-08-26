<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclePackage extends Model
{
    protected $table = 'vehicle_package';
    protected $fillabel = [
        'package_name',
        'desciprtion',
        'duration_date',
        'price',
        'created_at',
        'updated_at'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
