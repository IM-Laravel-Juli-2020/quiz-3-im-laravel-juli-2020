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
            $table->bigIncrements('idProyek');
            $table->string('nama_proyek');
            $table->string('deskripsi_proyek');
            $table->date('tanggal_mulai')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('tanggal_deadline');
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('proyek', function (Blueprint $table) {
            Schema::dropIfExists('karyawan');
        });
    }
}
