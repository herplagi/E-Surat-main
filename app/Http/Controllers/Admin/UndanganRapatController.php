<?php
// File: app/Http/Controllers/BeritaAcaraController.php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\UndanganRapat;

class UndanganRapatController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut' => 'required',
            'initial_unit' => 'required',
            'lampiran' => 'required',
            'hal' => 'required',
            'tanggal_surat' => 'required',
            'penerima_undangan' => 'required',
            'alamat_penerima' => 'required',
            'isi_surat' => 'required',
            'letter_date' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'agenda' => 'required',
            'nama_pengirim' => 'required',
            'jabatan_pengirim' => 'required',
            'initial_pimpinan' => 'required',
            'initial_pengetik' => 'required',
            'kode_klasifikasi' => 'required',
        ]);

        // Simpan data ke database
        $undanganRapat = UndanganRapat::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-undangan-rapat', ['undanganRapat' => $undanganRapat]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $undanganRapat = UndanganRapat::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-berita-acara', ['undanganRapat' => $undanganRapat]);
    }
}
