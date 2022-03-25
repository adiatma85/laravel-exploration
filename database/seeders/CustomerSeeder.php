<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
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
                'name' => 'Petrik',
                'email' => 'Petrik@example_mail.com',
                'phone' => '021-435-235',
                'address' => 'Jalan yang panjang dan lebar'
            ],
            [
                'name' => 'Pendik',
                'email' => 'Pendikk@example_mail.com',
                'phone' => '021-435-236',
                'address' => 'Jalan kenangan'
            ],
            [
                'name' => 'Metrik',
                'email' => 'Metrik@example_mail.com',
                'phone' => '021-435-237',
                'address' => 'Jalan-jalan'
            ],
            [
                'name' => 'Dendik',
                'email' => 'Dendik@example_mail.com',
                'phone' => '021-435-210',
                'address' => 'Ini alamatnya dendik'
            ],
            [
                'name' => 'Sigik',
                'email' => 'Sigik@example_mail.com',
                'phone' => '021-435-211',
                'address' => 'Maaf, belum punya rumah'
            ],
        ];

        foreach ($arrayOfObj as $item) {
            Customer::create($item);
        }
    }
}
