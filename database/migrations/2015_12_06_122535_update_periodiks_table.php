<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePeriodiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('periodiks', function (Blueprint $table) {
            $table->enum('wilayah_khusus',['ya','tidak']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){}
}
