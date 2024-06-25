<?php
// File: app/Http/Controllers/KreController.php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Kre;

class KreController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut'=> 'required',
            'initial_unit'=> 'required',
            'lampiran'=> 'required',
            'hal'=> 'required',
            'tanggal_surat'=> 'required',
            'penerima_undangan'=> 'required',
            'alamat_penerima'=> 'required',
            'isi_surat'=> 'required',
            'letter_date'=> 'required',
            'waktu'=> 'required',
            'tempat'=> 'required',
            'nama_pengirim'=> 'required',
            'jabatan_pengirim'=> 'required',
            'initial_pimpinan'=> 'required',
            'initial_pengetik'=> 'required',
            'kode_klasifikasi'=> 'required',
            
        ]);

        // Simpan data ke database
        $kre = Kre::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-kre', ['kre' => $kre]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $kre = Kre::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-kre', ['kre' => $kre]);
    }
}
