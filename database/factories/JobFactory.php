<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'Title' => $faker->jobTitle,
        'Price' => setPrice($faker->randomNumber(2)),
        'Description' => $faker->sentence,
    ];
});
