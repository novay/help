<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSertifikasiIsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasi_isos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->integer('sertifikasi_iso_id');
            $table->string('no_sk',40);
            $table->date('tmt');
            $table->date('berlaku_sampai');
            $table->string('file',40);
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
        Schema::drop('sertifikasi_isos');
    }
}
