<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobStatus;
use Faker\Generator as Faker;

$factory->define(JobStatus::class, function (Faker $faker) {
    return [
        'type' => $faker->text,
    ];
});
