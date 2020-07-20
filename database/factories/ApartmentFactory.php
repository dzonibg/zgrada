<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'number' => $faker->randomNumber(2),
        'name' => $faker->name(),
//        'total_paid' => $faker->randomNumber(4),
//        'months_paid' => $faker->randomDigit
    ];
});
