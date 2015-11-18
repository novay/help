<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npsn',50);
            $table->string('nss',50);
            $table->integer('bentuk_pendidikan_id');
            $table->integer('status_sekolah_id');
            $table->integer('status_kepemilikan_id');
            $table->string('no_telp',15);
            $table->string('no_hp',15);
            $table->string('email',50);
            $table->string('website',50);
            $table->string('file_npsn',50);
            $table->string('file_nss',50);
            $table->string('file_logo',50);
            $table->unique('npsn');
            $table->unique('nss');
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
        Schema::drop('sekolahs');
    }
}
