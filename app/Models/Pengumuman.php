<?php
// File: app/Models/BeritaAcara.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman';
    protected $fillable = [
        'nomor_urut',
        'initial_unit',
        'letter_date',
        'isi_pengumuman',
        'nama_terang',
        'jabatan',
        'initial_pimpinan',
        'initial_pengetik',
        'kode_klasifikasi',
    ];
}
