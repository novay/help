<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInkuisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inkuisis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sekolah_id');
            $table->string('no_sk',30);
            $table->date('tmt');
            $table->date('tst');
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
        Schema::drop('inkuisis');
    }
}
