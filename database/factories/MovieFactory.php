<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'run_time'=> $faker->numberBetween(30,200),
        'rating'=>$faker->numberBetween(2,10),
        'director_id'=>$faker->numberBetween(1,20)

    ];
});
