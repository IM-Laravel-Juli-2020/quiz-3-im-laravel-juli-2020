<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('karyawan_manager_id')->unsigned();

            $table->foreign('karyawan_manager_id')->references('id')->on('karyawan_managers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan_staffs');
    }
}
