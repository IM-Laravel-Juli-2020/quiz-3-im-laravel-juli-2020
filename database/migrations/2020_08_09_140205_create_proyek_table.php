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
            $table->string('nama_proyek');
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_deadline')->nullable();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('manajer_id')->nullable();
            $table->foreign('manajer_id')->references('id')->on('manajer');
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
