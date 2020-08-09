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
            $table->bigIncrements('id_proyek');

            $table->unsignedBigInteger('id_manager');
            $table->foreign('id_manager')->references('id_manager')->on('manager');

            $table->string('nama_proyek', 50);
            $table->string('deskripsi_proyek', 255);

            $table->date('tanggal_mulai');
            $table->date('tanggal_deadline');

            $table->boolean('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');

        $table->dropForeign(['id_manager']);
        $table->dropColumn(['id_manager']);
    }
}
