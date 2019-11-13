<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\User;

use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    
    $users = User::all()->pluck('id')->toArray();
    
    return [
        'user_id' => $faker->randomElement($users),

        'provider' => $faker->boolean(0),
        'photo' => $faker->imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/'
    ];
});
