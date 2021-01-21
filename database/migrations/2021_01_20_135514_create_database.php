<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('ID_PRESTASI');
            $table->string('NAMA_PRESTASI');
            $table->timestamps();
        });
        
        Schema::create('siswa_prestasi', function (Blueprint $table) {
            $table->increments('ID_SISWA_PRESTASI');
            $table->string('NAMA_SISWA');
            $table->integer('PRESTASI')->unsigned();
            //$table->integer('PRESTASI')->references('ID_PRESTASI')->on('prestasi');
            $table->timestamps();
        });

        Schema::create('kelompok_konten', function (Blueprint $table) {
            $table->increments('ID_KELOMPOK_KONTEN');
            $table->string('NAMA_KELOMPOK_KONTEN');
            $table->timestamps();
        });

        Schema::create('konten', function (Blueprint $table) {
            $table->increments('ID_KONTEN');
            $table->string('NAMA_KONTEN');
            $table->integer('KELOMPOK_KONTEN')->unsigned();
            //$table->integer('KELOMPOK_KONTEN')->references('ID_KELOMPOK_KONTEN')->on('kelompok_konten');
            $table->text('NILAI_KONTEN');
            $table->timestamps();
        });

        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('ID_ARTIKEL');
            $table->string('JUDUL_ARTIKEL');
            $table->text('ISI_ARTIKEL');
            $table->integer('JUMLAH_VIEWER');
            $table->integer('ID_PENULIS')->unsigned();
            //$table->foreign('ID_PENULIS')->references('id')->on('users');
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
        
        Schema::dropIfExists('konten');
        Schema::dropIfExists('artikel');
        Schema::dropIfExists('kelompok_konten');
        Schema::dropIfExists('prestasi');
        Schema::dropIfExists('siswa_prestasi');
    }
}
