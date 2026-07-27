<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_benda',255);
            $table->enum('jenis',['Arkeologika','Etnografika','Filologika','Historika','Keramologika','Seni Rupa','Teknologika']);
            $table->string('bahan',255);
            $table->string('asal_ditemukan',255);
            $table->string('tempat_pembuatan',255);
            $table->string('cara_didapat',255);
            $table->string('tahun_abad_masa',255);
            $table->text('keterangan');
            $table->text('deskripsi_benda');
            $table->string('photo',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
