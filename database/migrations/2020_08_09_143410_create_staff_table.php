<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('staff_id');
            $table->unsignedBigInteger('jabatan_id')->nullable()->default(null);
            $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatan');

            $table->unsignedBigInteger('karyawan_id')->nullable()->default(null);
            $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
