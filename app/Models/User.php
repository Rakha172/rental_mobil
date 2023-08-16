<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillabel = [
        'nama_lengkap',
        'email',
        'password',
        'confirm_password',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
