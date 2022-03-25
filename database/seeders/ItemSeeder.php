<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayOfItemObj = [
            // Item 1
            [
                'name' => "Nasi Goreng",
                'price' => 10000
            ],
            // Item 2
            [
                'name' => "Sushi",
                'price' => 15000
            ],
            // Item 3
            [
                'name' => "Pasta",
                'price' => 9000
            ],
            // Item 4
            [
                'name' => "Lasagna",
                'price' => 12000
            ],
            // Item 5
            [
                'name' => "Nasi Padang",
                'price' => 15000
            ],
            // Item 6
            [
                'name' => "Pudding",
                'price' => 15000
            ],
            // Item 7
            [
                'name' => "Beer",
                'price' => 12500
            ],
        ];

        // Foreach item
        foreach ($arrayOfItemObj as $item) {
            Item::create($item);
        }
    }
}
