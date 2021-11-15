<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PaymentController;

// helper
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Payment for midtrans
Route::get('payment', [PaymentController::class, 'index']);
Route::post('payment', [PaymentController::class, 'pay']);

// Testing
Route::get('testing', function () {
    $listProvinsi = [
        // Sumatra
        11,
        12,
        13,
        14,
        15,
        16,
        17,
        18,
        19,
        21,

        // Kalimantan
        61,
        62,
        63,
        64,
        64,
        65,

        // Jawa
        31,
        32,
        33,
        34,
        35,
        36,

        // Nusa Tenggara dan Bali
        51,
        52,
        53,

        // Sulawesi
        71,
        72,
        73,
        74,
        74,
        76,

        // Maluku
        81,
        82,

        // Papua
        91,
        94,
    ];
    $client = new Client();
    $listProvinsiApi = json_decode($client->get(env('API_PROVINSI_KOTA_BASE_URL') . '/provinces.json')->getBody()->getContents());
    $randomProvinsi = $listProvinsiApi[rand(0, count($listProvinsiApi))];
    return response()->json([
        'randomProvinsi' => $randomProvinsi->id,
    ]);
});
