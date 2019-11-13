<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Job::class, 6)->create()->each(
            function ($job) {
            $job->JobStatus()->save(factory(App\JobStatus::class)->make());
        });
    }
}
