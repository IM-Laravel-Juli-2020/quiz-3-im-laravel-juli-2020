<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_manager')->nullable();
            $table->foreign('id_manager')->references('idKaryawan')->on('karyawan');

            $table->unsignedBigInteger('proyek_idProyek')->nullable();
            $table->foreign('proyek_idProyek')->references('idProyek')->on('proyek');
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
            $table->dropForeign(['id_manager']);
            $table->dropColumn(['id_manager']);

            $table->dropForeign(['proyek_idProyek']);
            $table->dropColumn(['proyek_idProyek']);
        });
    }
}
