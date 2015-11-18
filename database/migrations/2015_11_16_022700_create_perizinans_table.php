<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerizinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->string("no_sk",30);
            $table->date("tgl_sk");
            $table->string("file_sk",40);
            $table->string("no_sk_oprasional",30);
            $table->date("tgl_sk_oprasional");
            $table->string("file_sk_oprasional",40);
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
        Schema::drop('izins');
    }
}
