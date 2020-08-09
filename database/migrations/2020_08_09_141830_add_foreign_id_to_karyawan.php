<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdToKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_proyek')->nullable();
            $table->unsignedBigInteger('id_jabatan')->nullable();

            $table->foreign('id_proyek')->references('id')->on('proyek');
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
            $table->dropForeign('id_proyek');
            $table->dropForeign('id_jabatan');

            $table->dropColumn('id_jabatan');
            $table->dropColumn('id_proyek');
        });
    }
}
