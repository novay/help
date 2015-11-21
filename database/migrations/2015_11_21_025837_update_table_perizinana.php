<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePerizinana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perizinans', function(Blueprint $table) {
            $table->date("tgl_sk_oprasional_akhir");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perizinans', function(Blueprint $table) {
            $table->dropColumn("tgl_sk_oprasional_akhir");
        });
    }
}
