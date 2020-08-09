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
            $table->timestamps();
            $table->string('proyek_name');
            $table->string('desc');
            $table->integer('manajer_id')->nullable();
            $table->foreign('manajer_id')->references('id')->on('karyawan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->tinyInteger('status')->default(0);
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
