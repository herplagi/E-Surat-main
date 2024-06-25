<?php
// File: app/Http/Controllers/PengumumanController.php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Keterangan;

class KeteranganController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut'=> 'required',
            'initial_unit'=> 'required',
            'letter_date'=> 'required',
            'nama_yang_bertandatangan'=> 'required',
            'jabatan'=> 'required',
            'perusahaan'=> 'required',
            'nama_yang_diterangkan'=> 'required',
            'nip'=> 'required',
            'alamat'=> 'required',
            'unit_kerja'=> 'required',
            'isi_keterangan'=> 'required',
            'initial_pimpinan'=> 'required',
            'initial_pengetik'=> 'required',
            'kode_klasifikasi'=> 'required',
        ]);

        // Simpan data ke database
        $keterangan = Keterangan::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-keterangan', ['keterangan' => $keterangan]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $keterangan = Keterangan::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-keterangan', ['keterangan' => $keterangan]);
    }

    
}
