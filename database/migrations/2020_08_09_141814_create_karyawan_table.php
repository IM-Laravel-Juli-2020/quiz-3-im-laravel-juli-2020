<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('karyawan_id');
            $table->string('nama');
            $table->string('jabatan');
            $table->unsignedBigInteger('id_staff');
            $table->foreign('id_staff')->references('staff_id')->on('staff');
            $table->unsignedBigInteger('id_manager');
            $table->foreign('id_manager')->references('manager_id')->on('manager');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
