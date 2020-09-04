<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlueprint2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jabatan');
            $table->unsignedBigInteger('manager_id')->nullable()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('manager', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('karyawan_id')->onDelete('cascade');
        });

        Schema::table('karyawan', function (Blueprint $table) {
            $table->foreign('manager_id')->references('id')->on('manager');
        });

        Schema::table('manager', function (Blueprint $table) {
            $table->foreign('karyawan_id')->references('id')->on('karyawan');
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
        Schema::dropIfExists('manager');
    }
}
