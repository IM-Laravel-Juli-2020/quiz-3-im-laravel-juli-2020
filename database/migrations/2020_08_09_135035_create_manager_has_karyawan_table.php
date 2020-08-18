<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerHasKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_has_karyawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_karyawan');
            $table->unsignedBigInteger('id_manager');
            $table->timestamps();

            $table->foreign('id_karyawan')->references('id')->on('karyawan');
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
        Schema::dropIfExists('manager_has_karyawan');
    }
}
