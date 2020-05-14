<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeliveryFee;
use Faker\Generator as Faker;

$factory->define(DeliveryFee::class, function (Faker $faker) {
    return [
        "merchant_id" =>$faker->numberBetween($min = 1, $max = 3),
        "commune" =>$faker->city(),
        "delivery_fees" =>$faker->numberBetween($min = 1000, $max = 2000),


    ];
});
