<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillabel = [
        'name',
        'email',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
