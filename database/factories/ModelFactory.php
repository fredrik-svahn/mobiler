<?php

use Faker\Generator as Faker;

$factory->define(\App\DeviceModel::class, function (Faker $faker) {
    return [
        'name' => $faker->lastName
    ];
});
