<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionDetail::insert([
            [
                'transaction_id' => 1,
                'product_id' => 1
            ],
            [
                'transaction_id' => 2,
                'product_id' => 2
            ],
            [
                'transaction_id' => 3,
                'product_id' => 3
            ],
            [
                'transaction_id' => 4,
                'product_id' => 5
            ],
            [
                'transaction_id' => 5,
                'product_id' => 1
            ],
            [
                'transaction_id' => 6,
                'product_id' => 3
            ],
            [
                'transaction_id' => 7,
                'product_id' => 7
            ],
            [
                'transaction_id' => 8,
                'product_id' => 9
            ],
            [
                'transaction_id' => 9,
                'product_id' => 1
            ],
            [
                'transaction_id' => 10,
                'product_id' => 1
            ]
        ]);
    }
}
