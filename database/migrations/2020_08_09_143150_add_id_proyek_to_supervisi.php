<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdProyekToSupervisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supervisi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_proyek')->nullable();

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
        Schema::table('supervisi', function (Blueprint $table) {
            $table->dropForeign(['id_proyek']);
            $table->dropColumn(['id_proyek']);
        });
    }
}
