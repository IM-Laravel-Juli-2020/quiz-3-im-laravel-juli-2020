<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('karyawans');
            $table->unsignedBigInteger('staff_id')->unique();
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
        Schema::dropIfExists('staff_managers');
    }
}
