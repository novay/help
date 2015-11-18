<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkreditasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->string('no_sk')->unique('sk');
            $table->integer('nilai_id');
            $table->string('tmt');
            $table->date('tanggal');
            $table->integer('lembaga_id');
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
        Schema::drop('akreditasis');
    }
}
