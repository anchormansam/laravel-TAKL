<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Job;
use App\User;
use App\TransactionType;

use App\Transactions;
use Faker\Generator as Faker;

$factory->define(Transactions::class, function (Faker $faker) {
    
    $users = User::all()->pluck('id')->toArray();
    $jobs = Job::all()->pluck('id')->toArray();
    $type = TransactionType::all()->pluck('id')->toArray();
    
    return [
        'job_id' => $faker->randomElement($jobs),
        'type_id' => $faker->randomElement($type),
        'user_id' => $faker->randomElement($users),
    ];
});
