<?php

use Illuminate\Database\Seeder;
use App\Repositories\Eloquent\Provinsi;
use App\Repositories\Eloquent\Kecamatan;
use App\Repositories\Eloquent\Kabupaten;
use App\Repositories\Eloquent\Kelurahan;
class RegionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Repositories\Eloquent\Provinsi::class,3)->create()->each(function ($provinsi)
        {
        	$provinsi->kabupaten()->save(factory(App\Repositories\Eloquent\Kabupaten::class,10)->create()->each(function ($kabupaten)
        	{
        		$kabupaten->kecamatan()->save(factory(App\Repositories\Eloquent\Kecamatan::class,10)->create()->each(function ($kecamatan)
        		{
        			$kecamatan->kelurahan()->saveMany(factory(App\Repositories\Eloquent\Kelurahan::class,10)->create());
        		}));
        	}));
        });
    }
}
