<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "merchant_id" =>$faker->numberBetween($min = 1, $max = 3),
        "code"       => $faker->md5(),
        "name"       => $faker->word(),
        "qantite" =>$faker->numberBetween($min = 1, $max = 3),
        "price" =>$faker->numberBetween($min = 1000, $max = 9000),

    ];
});
