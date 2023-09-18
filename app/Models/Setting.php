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
        'visi_misi',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
