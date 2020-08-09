<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffHasProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_has_proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('id_staff');
            $table->unsignedBigInteger('id_proyek');
            $table->timestamps();

            $table->foreign('id_staff')->references('id')->on('staff');
            $table->foreign('id_proyek')->references('id')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_has_proyek');
    }
}
