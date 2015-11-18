<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTableDataLayananKhususTambahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_layanan_khusus_tambahan', function (Blueprint $table) {
            $table->integer('data_layanan_khusus_id');
            $table->integer('tambahan_id');
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
        Schema::drop('data_layanan_khusus_tambahan');
    }
}
