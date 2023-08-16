<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillabel = [
        'nik_user',
        'nama_lengkap',
        'jenis_kelamin',
        'nomor_tlp',
        'alamat_lengkap',
        'foto_ktp',
        'foto_sim',
        'email',
        'password',
        'confirm_password',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
