<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
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
                'name' => "Makanan Berat",
            ],
            [
                'name' => "Makanan Ringan",
            ],
            [
                'name' => "Makanan Indonesia",
            ],
            [
                'name' => "Makanan Jepang",
            ],
            [
                'name' => "Makanan Itali",
            ],
            [
                'name' => "Minuman",
            ],
        ];

        foreach ($arrayOfObj as $item) {
            Category::create($item);
        }
    }
}
