<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use App\Models\RawData;
use Illuminate\Support\Facades\DB;

class RawDataSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        $client = new Client();
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

        // 500000 loop
        for ($i = 0; $i < 500000; $i++) {
            // Random Provinsi
            $listProvinsiApi = json_decode($client->get(env('API_PROVINSI_KOTA_BASE_URL') . '/provinces.json')->getBody()->getContents());
            $randomProvinsi = $listProvinsiApi[rand(0, count($listProvinsiApi) - 1)];

            // Radnom Kota Kabupaten
            $listKotaKabupatenApi = json_decode($client->get(env('API_PROVINSI_KOTA_BASE_URL') . "/regencies/$randomProvinsi->id.json")->getBody()->getContents());
            $randomKotaKabupaten = $listKotaKabupatenApi[rand(0, count($listKotaKabupatenApi) - 1)];

            // Random Kecamatan
            $listKecamatanApi = json_decode($client->get(env('API_PROVINSI_KOTA_BASE_URL') . "/districts/$$randomKotaKabupaten->id.json")->getBody()->getContents());
            $randomKecamatan = $listKecamatanApi[rand(0, count($listKecamatanApi) - 1)];

            // Another Random not related to API
            $randomTanggal = rand(1, 31);
            $randomTahun = $listTahun[rand(0, count($listTahun) - 1)];
            $randomBulan = $listBulan[rand(0, count($listBulan) - 1)];
            $randomStatus = $listStatus[rand(0, count($listStatus) - 1)];
            $randomJenisKelamin = $listJenisKelamin[rand(0, count($listJenisKelamin) - 1)];
            $randomUsia = rand(1, 95);

            RawData::insert([
                'provinsi' => ucfirst($randomProvinsi->name),
                'kota' => ucfirst($randomKotaKabupaten->name),
                'kecamatan' => ucfirst($randomKecamatan->name),
                'usia' => $randomUsia,
                'jenis_kelamin' => $randomJenisKelamin,
                'tahun' => $randomTahun,
                'bulan' => $randomBulan,
                'tanggal' => $randomTanggal,
                'status' => $randomStatus,
            ]);
        }
    }
}
