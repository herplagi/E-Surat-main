<?php
// File: app/Models/BeritaAcara.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korin extends Model
{
    use HasFactory;

    protected $table = 'korin';
    protected $fillable = [
        'nomor_urut',
        'initial_unit',
        'letter_date',
        'yang_dituju',
        'tembusan',
        'dari',
        'hal',
        'sifat',
        'isi_korin',
        'yg_ttd',
        'jabatan',
    ];
}
