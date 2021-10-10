<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\PaymentController;

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