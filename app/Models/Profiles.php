<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    // fewweff
    protected $table = 'profiles';
    protected $fillabel = [
        'user_nik',
        'gender',
        'phone_number',
        'full_address',
        'id_card_photo',
        'driver_license_photo',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
