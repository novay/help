<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class UpdaateTableYayasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('yayasans', function($table) {
            $table->string('pimpinan',100);
        });
        if (Schema::hasColumn('yayasans','pimpinanan'))
        {
            DB::update('UPDATE yayasans set pimpinan = pimpinanan');
            Schema::table('yayasans', function($table) {
                $table->dropColumn('pimpinanan');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('yayasans', function($table) {
            $table->string('pimpinanan',100);
        });
        if (Schema::hasColumn('yayasans','pimpinan'))
        {
            DB::update('UPDATE yayasans set pimpinanan = pimpinan');
            Schema::table('yayasans', function($table) {
                $table->dropColumn('pimpinan');
            });
        }
    }
}
