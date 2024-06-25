<?php
// File: app/Models/Kre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;

    protected $table = 'keterangan';
    protected $fillable = [
        'nomor_urut',
        'initial_unit',
        'letter_date',
        'nama_yang_bertandatangan',
        'jabatan',
        'perusahaan',
        'nama_yang_diterangkan',
        'nip',
        'alamat',
        'unit_kerja',
        'isi_keterangan',
        'initial_pimpinan',
        'initial_pengetik',
        'kode_klasifikasi',
    ];
}
