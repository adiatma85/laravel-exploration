<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimensiJenisKelamin;

class Jenis_Kelamin_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DimensiJenisKelamin::create(['jenis_kelamin' => 'Laki-Laki']);
        DimensiJenisKelamin::create(['jenis_kelamin' => 'Perempuan']);
    }
}
