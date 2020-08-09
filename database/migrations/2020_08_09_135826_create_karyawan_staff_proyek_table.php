<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanStaffProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_staff_proyek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_staff_id')->unsigned();
            $table->integer('proyek_id')->unsigned();

            $table->foreign('karyawan_staff_id')->references('id')->on('karyawan_staffs')->onDelete('cascade');
            $table->foreign('proyek_id')->references('id')->on('proyeks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan_staff_proyek');
    }
}
