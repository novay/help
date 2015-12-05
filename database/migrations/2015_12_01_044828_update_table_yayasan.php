<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableYayasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('yayasans', function($table) {
            $table->string('file_akte',50)->change();
            $table->string('file_pengesahan',50)->change();
            $table->string('file_berita',50)->change();
            $table->string('file_logo',50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
