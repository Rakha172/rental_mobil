<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $table = 'payment';

   protected $fillabel = [
     'user_id',
     'vehicle_package_id',
     'payment_method',
     'proof_of_transaction',
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
