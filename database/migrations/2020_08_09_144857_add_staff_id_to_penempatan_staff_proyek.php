<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStaffIdToPenempatanStaffProyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penempatan_staff_proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('karyawan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penempatan_staff_proyek', function (Blueprint $table) {
            $table->dropForeign(['karyawan_id']);
        });
    }
}
