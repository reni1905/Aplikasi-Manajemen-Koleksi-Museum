<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event',255);
            $table->text('deskripsi_event');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('lokasi',255);
            $table->string('galeri_event',255);
            $table->string('kuota_peserta',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
