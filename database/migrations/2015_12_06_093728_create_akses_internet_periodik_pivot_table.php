<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksesInternetPeriodikPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('akses_internet_periodik'))
        {
            Schema::create('akses_internet_periodik', function (Blueprint $table) {
                $table->integer('akses_internet_id')->unsigned()->index();
                $table->foreign('akses_internet_id')->references('id')->on('akses_internets')->onDelete('cascade');
                $table->integer('periodik_id')->unsigned()->index();
                $table->foreign('periodik_id')->references('id')->on('periodiks')->onDelete('cascade');
                $table->primary(['akses_internet_id', 'periodik_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('akses_internet_periodik');
    }
}
