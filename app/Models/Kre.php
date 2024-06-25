<?php
// File: app/Models/Kre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kre extends Model
{
    use HasFactory;

    protected $table = 'kre';
    protected $fillable = [
        'nomor_urut',
        'initial_unit',
        'lampiran',
        'hal',
        'tanggal_surat',
        'penerima_undangan',
        'alamat_penerima',
        'isi_surat',
        'letter_date',
        'waktu',
        'tempat',
        'nama_pengirim',
        'jabatan_pengirim',
        'initial_pimpinan',
        'initial_pengetik',
        'kode_klasifikasi',
    ];
}
