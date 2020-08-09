<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf', function (Blueprint $table) {
            $table->bigIncrements('id_staf');
            $table->char('staf',50);
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('proyek_id');
            $table->foreign('manager_id')->references('id_manager')->on('manager');
            $table->foreign('proyek_id')->references('id_proyek')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staf');
    }
}
