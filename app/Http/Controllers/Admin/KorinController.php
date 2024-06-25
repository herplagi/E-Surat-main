<?php
// File: app/Http/Controllers/PengumumanController.php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Korin;

class KorinController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_urut' => 'required',
            'initial_unit' => 'required',
            'letter_date' => 'required',
            'yang_dituju' => 'required',
            'tembusan' => 'required',
            'dari' => 'required',
            'hal' => 'required',
            'sifat' => 'required',
            'isi_korin' => 'required',
            'yg_ttd' => 'required',
            'jabatan' => 'required',
        ]);

        // Simpan data ke database
        $korin = Korin::create($request->all());

        // Redirect atau tampilkan halaman cetak
        return view('forms.print-korin', ['korin' => $korin]);
    }
    
    public function print($id)
    {
        // Ambil data berita acara berdasarkan ID
        $korin = Korin::findOrFail($id);

        // Tampilkan halaman cetak dengan data berita acara
        return view('forms.print-korin', ['korin' => $korin]);
    }

    
}
