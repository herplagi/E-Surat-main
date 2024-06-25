<?php
// File: app/Models/Kre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganRapat extends Model
{
    use HasFactory;

    protected $table = 'undangan_rapat';
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
        'agenda',
        'nama_pengirim',
        'jabatan_pengirim',
        'initial_pimpinan',
        'initial_pengetik',
        'kode_klasifikasi',
    ];
}
