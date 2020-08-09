<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_anggota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proyek_id')->nullable();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->foreign('proyek_id')->references('id')->on('proyek');
            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek_anggota');
    }
}
