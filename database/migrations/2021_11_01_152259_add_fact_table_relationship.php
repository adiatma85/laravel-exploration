<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFactTableRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fact', function (Blueprint $table) {
            $table->foreign('lokasi_id', 'fk_fact_lokasi_fk_0001')->references('id')->on('lokasi');
            $table->foreign('waktu_id', 'fk_fact_waktu_fk_0002')->references('id')->on('waktu');
            $table->foreign('status_id', 'fk_fact_status_fk_0003')->references('id')->on('status');
            $table->foreign('rentan_usia_id', 'fk_fact_rentan_usia_fk_0004')->references('id')->on('rentan_usia');
            $table->foreign('jenis_kelamin_id', 'fk_fact_jenis_kelamin_fk_0005')->references('id')->on('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fact', function (Blueprint $table) {
            $table->dropForeign('fk_fact_lokasi_fk_0001');
            $table->dropForeign('fk_fact_waktu_fk_0002');
            $table->dropForeign('fk_fact_status_fk_0003');
            $table->dropForeign('fk_fact_rentan_usia_fk_0004');
            $table->dropForeign('fk_fact_jenis_kelamin_fk_0005');
        });
    }
}
