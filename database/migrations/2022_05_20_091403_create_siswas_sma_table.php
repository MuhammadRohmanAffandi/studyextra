<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasSMATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_sma', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_siswa');
            $table->string('email_siswa');
            $table->string('jenis_kelamin_siswa');
            $table->string('no_hp_siswa');
            $table->string('ttl_siswa');
            $table->string('foto_siswa');
            $table->string('alamat_lengkap_rumah_siswa');
            $table->String('nama_sekolah_siswa');
            $table->string('jenjang');
            $table->string('paket');
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
        Schema::dropIfExists('siswas_sma');
    }
}
