<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'tenant';
    protected $fillabel = [
        'image',
        'name',
        'package_name',
        'rental_date',
        'return_date',
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

    public function vehiclepackage()
    {
        return $this->belongsTo(Vehiclepackage::class, 'package_name', 'id');
    }


}
