<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_proyek', function (Blueprint $table) {
            $table->bigIncrements('id_daftar_proyek');

            $table->unsignedBigInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id')->on('karyawan');

            $table->unsignedBigInteger('id_jabatan');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan');

            $table->unsignedBigInteger('id_proyek');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_proyek');
    }
}
