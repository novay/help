<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodiks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->integer('tahun_ajaran_id');
            $table->integer('semester_id');
            $table->integer('waktu_penyelenggaraan_id');
            $table->enum('bosna',['ya','tidak']);
            $table->enum('bosda',['ya','tidak']);
            $table->integer('sumber_listrik_id');
            $table->integer('daya');
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
        Schema::drop('periodiks');
    }
}
