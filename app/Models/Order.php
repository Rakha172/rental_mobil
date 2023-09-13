<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'user_id',
        'rental_date',
        'return_date',
        'vehicle_package_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle_package()
    {
        return $this->belongsTo(Vehicle_Package::class);
    }
}
