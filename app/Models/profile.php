<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';
    protected $fillabel = [
        'nik_user',
        'jenis_kelamin',
        'nomor_tlp',
        'alamat_lengkap',
        'foto_ktp',
        'foto_sim',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
