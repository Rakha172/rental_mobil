<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_detail';

    // protected $fillabel = [
    //     'payment_approved',
    //     'user_id',
    //     'created_at',
    //     'updated_at',
    // ];

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
