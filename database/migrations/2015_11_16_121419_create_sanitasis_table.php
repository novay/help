<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanitasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanitasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->string('title',50);
            $table->integer('tahun_ajaran_id');
            $table->integer('semester_id');
            $table->enum('ketersedian_air',['ya','tidak']);
            $table->integer('suplai_air_id');
            $table->enum('kecukupan_air',['cukup','kurang','tidak ada']);
            $table->enum('proses_air',['ya','tidak']);
            $table->enum('air_minum',['ya','tidak']);
            $table->enum('membawa_air',['ya','tidak']);
            $table->integer('toilet_kebutuhan_khsusu');
            $table->integer('toilet_siswa_kecil');
            $table->integer('cuci_tangan');
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
        Schema::drop('sanitasis');
    }
}
