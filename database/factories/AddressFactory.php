<?php

use Faker\Generator as Faker;

$factory->define(\App\Address::class, function (Faker $faker) {
    return [
        'street' => $faker->streetAddress,
        'city' => $faker->city
    ];
});
