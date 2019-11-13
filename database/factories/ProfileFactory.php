<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'provider' => $faker->boolean(0),
        'photo' => $faker->imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
    ];
});
