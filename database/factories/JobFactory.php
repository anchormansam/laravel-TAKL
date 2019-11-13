<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use App\User;
use App\JobStatus;

use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
   
    $users = User::all()->pluck('id')->toArray();
    $status = JobStatus::all()->pluck('id')->toArray();

    return [

        'user_id' => $faker->randomElement($users),
        'status_id' => $faker->randomElement($status),
        'title' => $faker->jobTitle,
        'price' => $faker->randomNumber(2),
        'description' => $faker->sentence,
        
        
    ];
});
