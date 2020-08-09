<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_staf', function (Blueprint $table) {
            $table->unsignedBigInteger('proyek_id')->nullable(); 
            $table->unsignedBigInteger('staf_id')->nullable(); 
            $table->foreign('proyek_id')->references('id')->on('proyek');                   
            $table->foreign('staf_id')->references('id')->on('karyawan');                   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek_staf');
    }
}
