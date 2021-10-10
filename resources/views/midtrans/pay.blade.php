<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Midtrans</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="container">
    <h1 class="text-center">Midtrans Invoices</h1>
    <table class="table w-50 mx-auto">
        <tbody>
            <tr>
                <td>Nama Pembeli</td>
                <td>{{ $request->firstName ." ". $request->lastName }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $request->email }}</td>
            </tr>
            <tr>
                <td>Barang</td>
                <td>{{ $request->item }} x{{ $request->amount }}</td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>Rp {{ $request->price }}</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rp {{ $request->price * $request->amount}}</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
    <a href="{{ $token->redirect_url }}" class="btn btn-primary">Pay now</a>

    </div>
</body>

</html>