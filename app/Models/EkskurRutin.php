<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkskurRutin extends Model
{
    use HasFactory;
    protected $fillable = [
        'sekolah',
        'periode',
        'nik',
        'nama_lengkap',
        'jenis_ekskur',
        'honor',
    ];
}
