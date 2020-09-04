<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlueprint3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->date('mulai');
            $table->date('deadline');
            $table->boolean('staus');
            $table->unsignedBigInteger('manager_id');
            $table->timestamps();
        });

        Schema::create('karyawan_projek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('karyawan_id');
            $table->unsignedBigInteger('projek_id');
        });

        Schema::table('projek', function (Blueprint $table) {
            $table->foreign('manager_id')->references('id')->on('manager')->onDelete('cascade');
        });

        Schema::table('karyawan_projek', function (Blueprint $table) {
            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
            $table->foreign('projek_id')->references('id')->on('projek')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projek');
        Schema::dropIfExists('karyawan_projek');
    }
}
