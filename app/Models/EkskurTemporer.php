<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkskurTemporer extends Model
{
    use HasFactory;
    protected $table = 'ekskur_temporers';
    protected $fillable = [
        'sekolah',
        'periode',
        'npwp',
        'nik',
        'nama_lengkap',
        'jenis_ekskur',
        'honor',
        'nama_bank',
        'norek',
        'atas_nama',
    ];
}
