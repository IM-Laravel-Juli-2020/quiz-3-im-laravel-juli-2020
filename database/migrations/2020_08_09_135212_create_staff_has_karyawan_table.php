<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffHasKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_has_karyawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_karyawan');
            $table->unsignedBigInteger('id_staff');
            $table->timestamps();

            $table->foreign('id_karyawan')->references('id')->on('karyawan');
            $table->foreign('id_staff')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_has_karyawan');
    }
}
