<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(JobStatusSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(TransactionTypeSeeder::class);
        $this->call(TransactionTableSeeder::class);
    }
}
