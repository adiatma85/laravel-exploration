<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawData extends Model
{
    use HasFactory;

    protected $table = 'raw_data';

    protected $fillable = [
        'provinsi',
        'kota',
        'usia',
        'jenis_kelamin',
        'tahun',
        'bulan',
        'tanggal',
        'status',
        'created_at',
        'updated_at',
    ];
}
