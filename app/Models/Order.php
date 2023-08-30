<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillabel = [
        'rental_date',
        'return_date',
        'created_at',
        'updated_at'
    ];

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle_packages()
    {
        return $this->belongsTo(Vehicle_Package::class);
    }
  
    use HasFactory;
    protected $table = 'order';
}
