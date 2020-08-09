<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proyek_id');
            $table->foreign('proyek_id')->references('id')->on('proyeks');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('karyawans');
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
        Schema::dropIfExists('proyek_staffs');
    }
}
