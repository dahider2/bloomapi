<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeliveryFee;
use App\Merchant;
use Faker\Generator as Faker;

$factory->define(DeliveryFee::class, function (Faker $faker) {
    return [
        "merchant_id" =>Merchant::all()->random()->id,
        "commune" =>$faker->city(),
        "delivery_fees" =>$faker->numberBetween($min = 1000, $max = 2000),


    ];
});
