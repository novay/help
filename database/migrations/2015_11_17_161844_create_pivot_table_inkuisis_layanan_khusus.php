<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTableInkuisisLayananKhusus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_layanan_khusus_inkuisis', function (Blueprint $table) {
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
        Schema::drop('inkuisis_layanan_khusus');
    }
}
