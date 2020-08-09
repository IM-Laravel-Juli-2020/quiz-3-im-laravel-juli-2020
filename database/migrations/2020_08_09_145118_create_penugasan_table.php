<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenugasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penugasan', function (Blueprint $table) {
            $table->unsignedBigInteger('idKaryawan')->nullable();
            $table->foreign('idKaryawan')->references('idKaryawan')->on('karyawan');
            $table->unsignedBigInteger('idProyek')->nullable();
            $table->foreign('idProyek')->references('idProyek')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penugasan');
    }
}
