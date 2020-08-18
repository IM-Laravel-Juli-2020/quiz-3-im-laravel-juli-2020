<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisi', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_manager')->nullable();
            $table->unsignedBigInteger('id_staf')->nullable();

            $table->foreign('id_manager')->references('id')->on('jabatan');
            $table->foreign('id_staf')->references('id')->on('jabatan');
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
            $table->dropForeign(['id_manager']);
            $table->dropForeign(['id_staf']);
            $table->dropColumn(['id']);
            $table->dropColumn(['id_manager']);
            $table->dropColumn(['id_staf']);
            $table->dropColumn(['id_proyek']);
        });
    }
}
