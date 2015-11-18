<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTableKebutuhanKhususSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebutuhan_khusus_siswas', function (Blueprint $table) {
            $table->integer('data_layanan_khsusus_id');
            $table->integer('inkuisis_id');
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
        Schema::drop('kebutuhan_khusus_siswas');
    }
}
