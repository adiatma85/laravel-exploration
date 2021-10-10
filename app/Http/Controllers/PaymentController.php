<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function index()
    {
        return view('midtrans.index');
    }

    public function pay(Request $request)
    {
        $response = Http::withHeaders([
            "Authorization" => "Basic ". base64_encode(env("MIDTRANS_SERVER_KEY")),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', [
            "transaction_details" => [
                "order_id" => "LARAMID-".Str::random(7),
                "gross_amount" => $request->price * $request->amount
            ],
            "credit_card" => [
                "secure" => true
            ],
            "customer_details" => [
                "first_name" => $request->firstName,
                "last_name" => $request->lastName,
                "email" => $request->email,
                "phone" => "08111222333"
            ],
            "item_details" => [
                [
                    "id" => "a01",
                    "price" => $request->price,
                    "quantity" => $request->amount,
                    "name" => $request->item
                ]
            ]
        ]);
        $token = json_decode($response->getBody(true)->getContents());
        return view('midtrans.pay', compact('token', 'request'));
    }
}
