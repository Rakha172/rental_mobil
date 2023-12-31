<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Vehicle_Package extends Model
{
    use HasFactory;
    protected $table = 'vehicle_packages';
    protected $fillabel = [
        'package_name',
        'desciprtion',
        'duration_date',
        'price',
        'created_at',
        'updated_at'
    ];

    protected $guarded = [];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
