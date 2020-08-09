<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManajerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manajer', function (Blueprint $table) {
            $table->unsignedBigInteger('manajer_id')->nullable(); 
            $table->unsignedBigInteger('staf_id')->nullable(); 
            $table->foreign('manajer_id')->references('id')->on('karyawan');                   
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
        Schema::dropIfExists('manajer');
    }
}
