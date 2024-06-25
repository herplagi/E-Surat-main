<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('initial_unit');
            $table->date('letter_date');
            $table->string('isi_pengumuman', 1000);
            $table->string('nama_terang');
            $table->string('jabatan');
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
        Schema::dropIfExists('pengumuman');
    }
}
