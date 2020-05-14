<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OtherOptionCategorie;
use Faker\Generator as Faker;

$factory->define(OtherOptionCategorie::class, function (Faker $faker) {
    return [
        "article_id" =>$faker->numberBetween($min = 1, $max = 5),
        "reference" =>$faker->md5(),
        "libele" =>$faker->word(),

    ];
});
