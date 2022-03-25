<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayOfObj = [
            [
                'customer_id' => 1,
                'created_by' => 1,
                'total' => 40000,
            ],
            [
                'customer_id' => 2,
                'created_by' => 2,
                'total' => 30000,
            ],
            [
                'customer_id' => 3,
                'created_by' => 3,
                'total' => 25000,
            ],
            [
                'customer_id' => 4,
                'created_by' => 4,
                'total' => 69000,
            ],
            [
                'customer_id' => 5,
                'created_by' => 5,
                'total' => 37500,
            ],
        ];

        foreach ($arrayOfObj as $item) {
            Order::create($item);
        }
    }
}
