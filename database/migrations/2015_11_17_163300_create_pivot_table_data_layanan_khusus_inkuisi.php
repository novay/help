<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTableDataLayananKhususInkuisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_layanan_khusus_inkuisi', function (Blueprint $table) {
            $table->integer('data_layanan_khusus_id');
            $table->integer('inkuisi_id');
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
        Schema::drop('data_layanan_khusus_inkuisi');
    }
}
