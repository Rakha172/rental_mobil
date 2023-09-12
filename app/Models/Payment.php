<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $table = 'payment';

   protected $fillabel = [
    'total_price',
    'payment_method',
    'proof_of_transaction'
   ];

//    public function Order()
//    {
//     return $this->belongsTo(Order::class);
//    }
}
