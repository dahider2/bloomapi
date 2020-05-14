<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Merchant;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "merchant_id" =>Merchant::all()->random()->id,
        "code"       => $faker->md5(),
        "name"       => $faker->word(),
        "qantite" =>$faker->numberBetween($min = 1, $max = 3),
        "price" =>$faker->numberBetween($min = 1000, $max = 9000),

    ];
});
