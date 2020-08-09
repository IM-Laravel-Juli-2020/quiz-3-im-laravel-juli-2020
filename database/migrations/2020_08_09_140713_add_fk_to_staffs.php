<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToStaffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('proyek_id');

            $table->foreign('manager_id')->references('manager_id')->on('managers');
            $table->foreign('proyek_id')->references('proyek_id')->on('proyeks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->dropForeign(['proyek_id']);
            $table->dropForeign(['manager_id']);
            $table->dropColumn(['proyek_id']);
            $table->dropColumn(['manager_id']);
        });
    }
}
