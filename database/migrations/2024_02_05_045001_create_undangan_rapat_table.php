<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangan_rapat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('initial_unit');
            $table->string('lampiran');
            $table->string('hal');
            $table->date('tanggal_surat');
            $table->string('penerima_undangan');
            $table->string('alamat_penerima');
            $table->string('isi_surat', 1000);
            $table->date('letter_date');
            $table->string('waktu');
            $table->string('tempat');
            $table->string('agenda');
            $table->string('nama_pengirim');
            $table->string('jabatan_pengirim');
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
        Schema::dropIfExists('undangan_rapat');
    }
}
