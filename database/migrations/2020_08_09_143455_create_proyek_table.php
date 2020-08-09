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
            $table->bigIncrements('proyek_id');
            $table->timestamps();

            $table->unsignedBigInteger('manager_id')->nullable()->default(null);
            $table->foreign('manager_id')->references('manager_id')->on('managers');

            $table->unsignedBigInteger('staff_id')->nullable()->default(null);
            $table->foreign('staff_id')->references('staff_id')->on('staff');

            $table->string('nama_proyek');
            $table->string('deskripsi_proyek');
            $table->date('tanggal_mulai')->nullable()->default(null);
            $table->date('tanggal_deadline')->nullable()->default(null);
            $table->boolean('status');
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
    }
}
