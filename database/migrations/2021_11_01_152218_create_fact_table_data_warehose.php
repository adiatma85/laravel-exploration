<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactTableDataWarehose extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lokasi_id')->nullable();
            $table->unsignedBigInteger('waktu_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('rentan_usia_id')->nullable();
            $table->unsignedBigInteger('jenis_kelamin_id')->nullable();
            $table->unsignedBigInteger('jumlah_korban')->nullable();
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
        Schema::dropIfExists('fact');
    }
}
