<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->bigIncrements('manager_id');
            $table->string('nama_manager');
            $table->unsignedBigInteger('id_proyek');
            $table->foreign('id_proyek')->references('id_manager')->on('proyek');
            $table->unsignedBigInteger('id_banyakstaff');
            $table->foreign('id_banyakstaff')->references('id_managernya')->on('staff');
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
        Schema::dropIfExists('manager');
    }
}
