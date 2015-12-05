<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(App\Repositories\Eloquent\Provinsi::class, function (Faker\Generator $faker) {
    		usleep(100);
    return [
    	'id' => str_limit(mt_rand(),2),
        'title' => $faker->state,
    ];
});
$factory->define(App\Repositories\Eloquent\Kabupaten::class, function (Faker\Generator $faker) {
    		usleep(100);
    return [
    	'id' => str_limit(mt_rand(),4),
        'title' => $faker->city
    ];
});
$factory->define(App\Repositories\Eloquent\Kecamatan::class, function (Faker\Generator $faker) {
    		usleep(100);
    return [
    	'id' => str_limit(mt_rand(),7),
        'title' => $faker->streetName,
    ];
});
$factory->define(App\Repositories\Eloquent\Kelurahan::class, function (Faker\Generator $faker) {
    		usleep(100);
    return [
    	'id' => str_limit(mt_rand(),10),
        'title' => $faker->citySuffix.$faker->streetSuffix,
    ];
});
