<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DimensiStatus;

class Status_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'aktif',
            'sembuh',
            'meninggal',
        ];

        // Status
        foreach ($status as $itemStatus) {
            $data = [
                'status' => $itemStatus
            ];
            DimensiStatus::create($data);
        }
    }
}
