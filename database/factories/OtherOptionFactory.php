<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OtherOption;
use Faker\Generator as Faker;

$factory->define(OtherOption::class, function (Faker $faker) {
    return [
        "other_option_categorie_id" =>$faker->numberBetween($min = 1, $max = 3),
        "reference" =>$faker->md5(),
        "price" =>$faker->numberBetween($min = 1000, $max = 9000),
        "choose" =>$faker->boolean(),
        "libele" =>$faker->word(),
        "qantite" =>$faker->numberBetween($min = 1, $max = 3),


    ];
});
