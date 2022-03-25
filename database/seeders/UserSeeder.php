<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $araryOfObj = [
            [
                'name' => 'Sutejo Bejo',
                'email' => 'Sutejo_Bejo@example_mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Soebagyo',
                'email' => 'Soebagyo@example_mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Makijo',
                'email' => 'Makijo@example_mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Marejo',
                'email' => 'Marejo@example_mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Subejo Tejo',
                'email' => 'Subejo_Tejo@example_mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Karyojo',
                'email' => 'Karyojo@example_mail.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($araryOfObj as $item) {
            User::create($item);
        }
    }
}
