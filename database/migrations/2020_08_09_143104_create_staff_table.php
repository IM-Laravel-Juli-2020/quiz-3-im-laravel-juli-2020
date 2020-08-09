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
            $table->bigIncrements('staff_id');
            $table->string('nama_staff');
            $table->unsignedBigInteger('projek_id');
            $table->foreign('projek_id')->references('proyek_id')->on('proyek');
            $table->unsignedBigInteger('id_managernya');
            $table->foreign('id_managernya')->references('id_banyakstaff')->on('manager');
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
        Schema::dropIfExists('staff');
    }
}
