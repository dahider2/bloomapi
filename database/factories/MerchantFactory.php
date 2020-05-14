<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchant;
use Faker\Generator as Faker;

$factory->define(Merchant::class, function (Faker $faker) {
    return [
        "code_m" => $faker->md5(),
        "name_m" => $faker->company(),
        "contact_m" => $faker->phoneNumber(),
    ];
});
