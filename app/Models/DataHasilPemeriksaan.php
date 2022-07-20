<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHasilPemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik_kendaraan',
        'no_plat_tnkb',
        'file_hasil_pemeriksaan',
        'keterangan',
    ];
}