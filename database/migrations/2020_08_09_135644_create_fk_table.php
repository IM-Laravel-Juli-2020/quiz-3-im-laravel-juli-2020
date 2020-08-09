<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('karyawan',function (Blueprint $table) {
            $table->index('id_karyawan');
        });

        Schema::table('proyek',function (Blueprint $table) {
            $table->Integer('manager_id')->unsigned()->change(); 
            $table->foreign('manager_id')->references('id_karyawan')->on('karyawan');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karyawan',function (Blueprint $table) {
            $table->dropIndex('karyawan_id_karyawan_index');
        });

        Schema::table('proyek',function (Blueprint $table) {
            $table->dropForeign('proyek_manager_id_foreign');
        });
    }
}
