<?php

use Faker\Generator as Faker;

$factory->define(\App\DeviceBrand::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName
    ];
});
