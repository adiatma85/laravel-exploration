<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayOfObj = [
            // Order 1
            [
                'order_id' => 1,
                'item_id' => 1,
                'quantity' => 1,
                'sub_total' => 10000
            ],
            [
                'order_id' => 1,
                'item_id' => 2,
                'quantity' => 2,
                'sub_total' => 30000
            ],

            // Order 2
            [
                'order_id' => 2,
                'item_id' => 6,
                'quantity' => 2,
                'sub_total' => 30000
            ],

            // Order 3
            [
                'order_id' => 3,
                'item_id' => 7,
                'quantity' => 2,
                'sub_total' => 25000
            ],

            // Order 4
            [
                'order_id' => 4,
                'item_id' => 5,
                'quantity' => 3,
                'sub_total' => 45000
            ],
            [
                'order_id' => 4,
                'item_id' => 4,
                'quantity' => 2,
                'sub_total' => 24000
            ],

            // Order 5
            [
                'order_id' => 5,
                'item_id' => 7,
                'quantity' => 3,
                'sub_total' => 37500
            ],
        ];

        foreach ($arrayOfObj as $item) {
            OrderDetail::create($item);
        }
    }
}
