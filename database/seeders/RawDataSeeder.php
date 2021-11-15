<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RawData;
use Illuminate\Support\Facades\DB;

class RawDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        $listProvinsi = [
            // Sumatra
            'Aceh',
            'Sumatra Utara',
            'Sumatra Selatan',
            'Sumatra Barat',
            'Bengkulu',
            'Riau',
            'Kepulauaan Riau',
            'Jambi',
            'Lampung',
            'Bangka Belitung',

            // Kalimantan
            'Kalimantan Barat',
            'Kalimantan Timur',
            'Kalimantan Selatan',
            'Kalimantan Tengah',
            'Kalimantan Utara',

            // Jawa
            'Banten',
            'DKI Jakarta',
            'Jawa Barat',
            'Jawa Tengah',
            'Yogyakarta',
            'Jawa Timur',

            // Nusa Tenggara dan Bali
            'Bali',
            'Nusa Tenggara Timur',
            'Nusa Tenggara Barat',

            // Sulawesi
            'Gorontalo',
            'Sulawesi Barat',
            'Sulawesi Tengah',
            'Sulawesi Utara',
            'Sulawesi Tenggara',
            'Sulawesi Selatan',

            // Maluku dan Papua
            'Maluku Utara',
            'Maluku',
            'Papua',
            'Papua Barat'
        ];

        $listTahun = [
            2020,
            2021
        ];

        $listBulan = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];
        $listStatus = [
            'Isolasi',
            'Kritis',
            'Sembuh',
            'Meninggal',
        ];
        $listJenisKelamin = [
            'Laki-laki',
            'Perempuan',
        ];
        // Loop hingga 5000
        // for ($i=0; $i < 5000; $i++) { 
        //     $randomProvinsi = $listProvinsi[rand(0, count($listProvinsi) - 1)];
        //     $randomTanggal = rand(0, 32);
        //     $randomTahun = $listTahun[rand(0, count($listTahun) - 1)];
        //     $randomBulan = $listBulan[rand(0, count($listBulan) - 1)];
        //     $randomStatus = $listStatus[rand(0, count($listStatus) - 1)];
        //     $randomJenisKelamin = $listJenisKelamin[rand(0, count($listJenisKelamin) - 1)];
        //     $randomUsia = rand(0, 90);

        //     RawData::insert([
        //         'provinsi' => $randomProvinsi,
        //         'usia' => $randomUsia,
        //         'jenis_kelamin' => $randomJenisKelamin,
        //         'tahun' => $randomTahun,
        //         'bulan' => $randomBulan,
        //         'tanggal' => $randomTanggal,
        //         'status' => $randomStatus,
        //     ]);
        // }

        // Loop hingga 50000
        for ($i=0; $i < 50000; $i++) { 
            $randomProvinsi = $listProvinsi[rand(0, count($listProvinsi) - 1)];
            $randomTanggal = rand(0, 32);
            $randomTahun = $listTahun[rand(0, count($listTahun) - 1)];
            $randomBulan = $listBulan[rand(0, count($listBulan) - 1)];
            $randomStatus = $listStatus[rand(0, count($listStatus) - 1)];
            $randomJenisKelamin = $listJenisKelamin[rand(0, count($listJenisKelamin) - 1)];
            $randomUsia = rand(0, 90);

            RawData::insert([
                'provinsi' => $randomProvinsi,
                'usia' => $randomUsia,
                'jenis_kelamin' => $randomJenisKelamin,
                'tahun' => $randomTahun,
                'bulan' => $randomBulan,
                'tanggal' => $randomTanggal,
                'status' => $randomStatus,
            ]);
        }

        // Loop hingga 500000
        // for ($i=0; $i < 500000; $i++) { 
        //     $randomProvinsi = $listProvinsi[rand(0, count($listProvinsi) - 1)];
        //     $randomTanggal = rand(0, 32);
        //     $randomTahun = $listTahun[rand(0, count($listTahun) - 1)];
        //     $randomBulan = $listBulan[rand(0, count($listBulan) - 1)];
        //     $randomStatus = $listStatus[rand(0, count($listStatus) - 1)];
        //     $randomJenisKelamin = $listJenisKelamin[rand(0, count($listJenisKelamin) - 1)];
        //     $randomUsia = rand(0, 90);

        //     RawData::insert([
        //         'provinsi' => $randomProvinsi,
        //         'usia' => $randomUsia,
        //         'jenis_kelamin' => $randomJenisKelamin,
        //         'tahun' => $randomTahun,
        //         'bulan' => $randomBulan,
        //         'tanggal' => $randomTanggal,
        //         'status' => $randomStatus,
        //     ]);
        // }
    }
}
