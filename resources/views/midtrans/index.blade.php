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

<body class="container mt-5">
    <h1>Midtrans Integrations</h1>

    <form action="/payment" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input required type="text" name="firstName" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input required type="text" name="lastName" class="form-control" placeholder="Last name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email" placeholder="email@example.com" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="item">Item Name</label>
            <input required type="item" class="form-control" id="item" name="item" placeholder="apple">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input required type="number" class="form-control" id="inlineFormInput requiredGroup" name="price"
                            placeholder="price">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input required type="number" name="amount" class="form-control" placeholder="amount">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</body>

</html>