<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Director::class, function (Faker $faker) {
         return [
             'name' => $faker->name,
             'age' =>$faker->numberBetween(30,70)
    ];
});
