<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_proyek');
            $table->string('desc_proyek');
            $table->date('tanggal_mulai');
            $table->date('tanggal_deadline');
            $table->enum('status', ['true', 'false']);

            $table->unsignedBigInteger('id_staff')->nullable();

            $table->foreign('id_staff')->references('id')->on('jabatan');
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
            $table->dropColumn(['id']);
            $table->dropColumn(['nama_proyek']);
            $table->dropColumn(['desc_proyek']);
            $table->dropColumn(['tanggal_mulai']);
            $table->dropColumn(['tanggal_deadline']);
            $table->dropColumn(['status']);
            $table->dropColumn(['id_staff']);
        });
    }
}
