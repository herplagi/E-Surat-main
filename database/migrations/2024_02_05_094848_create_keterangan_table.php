<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('initial_unit');
            $table->date('letter_date');
            $table->string('nama_yang_bertandatangan');
            $table->string('jabatan');
            $table->string('perusahaan');
            $table->string('nama_yang_diterangkan');
            $table->string('nip');
            $table->string('alamat');
            $table->string('unit_kerja');
            $table->string('isi_keterangan' , 1000);
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
        Schema::dropIfExists('keterangan');
    }
}
