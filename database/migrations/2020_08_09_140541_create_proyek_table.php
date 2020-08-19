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
            $table->string('nama', 255);
            $table->string('deskripsi', 255);
            $table->date('tanggal_mulai');
            $table->date('tanggal_deadline');
            $table->boolean('status');
            $table->unsignedBigInteger('id_staff')->nullable();
            $table->unsignedBigInteger('id_manager')->nullable();
            $table->foreign('id_staff')->references('id')->on('staff');
            $table->foreign('id_manager')->references('id')->on('manager');
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
