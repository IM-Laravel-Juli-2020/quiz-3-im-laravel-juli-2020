<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenempatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penempatan', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_staff')->nullable();
            $table->unsignedBigInteger('id_proyek')->nullable();

            $table->foreign('id_staff')->references('id')->on('jabatan');
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
            $table->dropForeign(['id_staff']);
            $table->dropForeign(['id_proyek']);
            $table->dropColumn(['id']);
            $table->dropColumn(['id_staff']);
            $table->dropColumn(['id_proyek']);
        });
    }
}
