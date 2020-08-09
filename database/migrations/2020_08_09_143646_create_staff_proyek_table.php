<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('id_proyek');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek');

            $table->unsignedBigInteger('id_staff');
            $table->foreign('id_staff')->references('id_staff')->on('staff');

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
        Schema::dropIfExists('staff_proyek');

        $table->dropForeign(['id_proyek']);
        $table->dropColumn(['id_proyek']);

        $table->dropForeign(['id_staff']);
        $table->dropColumn(['id_staff']);
    }
}
