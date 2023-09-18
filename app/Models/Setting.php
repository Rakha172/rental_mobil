<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillabel = [
        'name',
        'history',
        'image',
        'location',
        'no_telp',
        'social_media',
        'about_me',
        'slogan',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
