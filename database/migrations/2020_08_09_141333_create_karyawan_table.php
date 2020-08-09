<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('jabatan');

            $table->unsignedBigInteger('id_jabatan')->nullable();

            $table->foreign('id_jabatan')->references('id')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            $table->dropForeign(['id_jabatan']);
            $table->dropColumn(['id']);
            $table->dropColumn(['nama']);
            $table->dropColumn(['jabatan']);
            $table->dropColumn(['id_jabatan']);
        });
    }
}
