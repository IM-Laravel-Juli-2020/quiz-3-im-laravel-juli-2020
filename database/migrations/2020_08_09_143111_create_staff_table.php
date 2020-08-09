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
            $table->bigIncrements('id_staff');

            $table->unsignedBigInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawan');

            $table->unsignedBigInteger('id_manager');
            $table->foreign('id_manager')->references('id_manager')->on('manager');

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

        $table->dropForeign(['id_karyawan']);
        $table->dropColumn(['id_karyawan']);

        $table->dropForeign(['id_manager']);
        $table->dropColumn(['id_manager']);
    }
}
