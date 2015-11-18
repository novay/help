<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->text('alamat');
            $table->string('kecamatan_id',10);
            $table->string('kode_pos',10);
            $table->string('dusun',10);
            $table->string('lintang',20);
            $table->string('bujur',20);
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
        Schema::drop('lokasi_sekolahs');
    }
}
