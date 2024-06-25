<?php
// File: app/Http/Controllers/PengumumanController.php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut' => 'required',
            'initial_unit' => 'required',
            'letter_date' => 'required', 
            'isi_pengumuman' => 'required',
            'nama_terang' => 'required',
            'jabatan' => 'required',
            'initial_pimpinan' => 'required',
            'initial_pengetik' => 'required',
            'kode_klasifikasi' => 'required',
        ]);

        // Simpan data ke database
        $pengumuman = Pengumuman::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-pengumuman', ['pengumuman' => $pengumuman]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-pengumuman', ['pengumuman' => $pengumuman]);
    }

    
}
