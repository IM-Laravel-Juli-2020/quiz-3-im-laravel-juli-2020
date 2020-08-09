<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->datetime('tgl_mulai');
            $table->datetime('tgl_deadline');
            $table->boolean('selesai');
            $table->unsignedBigInteger('manajer_id')->nullable(); 
            $table->foreign('manajer_id')->references('id')->on('karyawan');                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
