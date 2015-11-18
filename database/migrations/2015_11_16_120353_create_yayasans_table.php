<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYayasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yayasans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->string('pimpinanan',100);
            $table->text('alamat');
            $table->string('kelurahan_id',10);
            $table->string('Dusun',35);
            $table->string('kode_pos',6);
            $table->string('rt',4);
            $table->string('rw',4);
            $table->string('lintang',20);
            $table->string('bujur',20);
            $table->string('no_telp',15);
            $table->string('no_fax',15);
            $table->string('no_hp',15);
            $table->string('email',50);
            $table->string('website',50);
            $table->string('npwp',50);
            $table->string('no_akte',50);
            $table->date('tgl_akte');
            $table->string('no_pengesahan',50);
            $table->date('tgl_pengesahan');
            $table->string('no_berita',50);
            $table->date('tgl_berita');
            $table->string('file_akte',40);
            $table->string('file_pengesahan',40);
            $table->string('file_berita',40);
            $table->string('file_logo',40);
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
        Schema::drop('yayasans');
    }
}
