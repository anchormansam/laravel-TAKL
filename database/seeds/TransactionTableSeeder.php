<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Transaction::class, 5)->create()->each(
            function ($transactions) {
            $transactions->transactionType()->save(factory(App\TransactionType::class)->make());
        });
    }
}
