<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Poeme;
use Faker\Generator as Faker;

$factory->define(Poeme::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence(5, true),
        "content" => $faker->sentence(20, true)
    ];
});
