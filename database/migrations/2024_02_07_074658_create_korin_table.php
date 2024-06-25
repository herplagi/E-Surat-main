<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korin', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('initial_unit');
            $table->date('letter_date');
            $table->string('yang_dituju');
            $table->string('tembusan');
            $table->string('dari');
            $table->string('hal');
            $table->string('sifat');
            $table->string('isi_korin' , 2000);
            $table->string('yg_ttd');
            $table->string('jabatan');
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
        Schema::dropIfExists('korin');
    }
}
