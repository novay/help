<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTambahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambahans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->enum('mbs',['ya','tidak']);
            $table->integer('luas_tanah_milik');
            $table->integer('luas_tanah_sewa');
            $table->string('status_kepemilikan_tanah',50);
            $table->string('no_status_kepemilikan_tanah',50);
            $table->string('file_kepemilikan_tanah',40);
            $table->string('npwp',20);
            $table->string('file_npwp',40);
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
        Schema::drop('tambahans');
    }
}
