<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimensiWaktu;

class Dimensi_Waktu_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tahun = [ 2021 ];
        $bulan = [ 
            'Agustus',
            'September',
            'Oktober',
            'November',
        ];
        $tanggal = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31
        ];

        // Tahun
        foreach ($tahun as $itemYear) {
            // Bulan
            foreach ($bulan as $itemBulan) {
                // Tanggal
                foreach ($tanggal as $itemTanggal) {
                    // Insert Item
                    $data = [
                        'tahun' => $itemYear,
                        'bulan' => $itemBulan,
                        'tanggal' => $itemTanggal,
                    ];
                    DimensiWaktu::create($data);
                }
            }
        }
    }
}
