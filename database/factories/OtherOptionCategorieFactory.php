<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\OtherOptionCategorie;
use Faker\Generator as Faker;

$factory->define(OtherOptionCategorie::class, function (Faker $faker) {
    return [
        "article_id" =>Article::all()->random()->id,
        "reference" =>$faker->md5(),
        "libele" =>$faker->word(),

    ];
});
