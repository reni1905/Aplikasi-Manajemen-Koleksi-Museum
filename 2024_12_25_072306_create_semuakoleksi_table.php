<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemuakoleksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semuakoleksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg',10);
            $table->string('no_inv',10);
            $table->enum('jenis',['Arkeologika','Etnografika','Filologika','Historika','Keramologika','Seni Rupa','Teknologika']);
            $table->string('nama_benda',255);
            $table->string('bahan',255);
            $table->string('asal_ditemukan',255);
            $table->string('tempat_pembuatan',255);
            $table->string('cara_didapat',255);
            $table->string('tahun_abad_masa',10);
            $table->string('tempat_simpan',255);
            $table->string('ukuran',50);
            $table->text('keterangan',255);
            $table->text('deskripsi_benda',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semuakoleksi');
    }
}
