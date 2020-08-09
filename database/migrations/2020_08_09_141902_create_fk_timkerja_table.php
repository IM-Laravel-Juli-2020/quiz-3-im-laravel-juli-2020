<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFkTimkerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyek',function (Blueprint $table) {
            $table->index('id_proyek');
        });

        Schema::table('tim_kerja',function (Blueprint $table) {
            $table->Integer('proyek_id')->unsigned()->change(); 
            $table->Integer('staff_id')->unsigned()->change(); 
            $table->foreign('staff_id')->references('id_karyawan')->on('karyawan');
            $table->foreign('proyek_id')->references('id_proyek')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyek',function (Blueprint $table) {
            $table->dropIndex('proyek_id_proyek_index');
        });

        Schema::table('tim_kerja',function (Blueprint $table) {
            $table->dropForeign('tim_kerja_proyek_id_foreign');
            $table->dropForeign('tim_kerja_staff_id_foreign');
        });
    }
}
