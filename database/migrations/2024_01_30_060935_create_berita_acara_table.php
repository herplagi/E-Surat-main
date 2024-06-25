<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_acara', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('initial_unit');
            $table->string('judul_berita_acara');
            $table->date('letter_date');
            $table->string('nama_kegiatan');
            $table->string('nama_pihak_pertama');
            $table->string('jabatan_pihak_pertama');
            $table->string('nama_pihak_kedua');
            $table->string('jabatan_pihak_kedua');
            $table->string('nama_saksi');
            $table->string('initial_pimpinan');
            $table->string('initial_pengetik');
            $table->string('kode_klasifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita_acara');
    }
}
