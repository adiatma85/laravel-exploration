<?php

namespace Database\Seeders;

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
        $this->call([
            // Dimensi Waktu Seeder
            Dimensi_Waktu_Seeder::class,
            // Dimensi Status Seeder
            Status_Seeder::class,
            // Jenis Kelamin Seeder
            Jenis_Kelamin_Seeder::class,
        ]);
    }
}
