<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .text-info h4 {
            margin-right: 10px;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container p-3 my-3 text-white text-center">
        <div class="row">
            <button type="button" class="btn btn-outline-info btn-block">
                + Add New Address
            </button>
        </div>
    </div>
    <div class="container text-white">
        <h4>Payment Method</h4>
    </div>
    <div class="container p-3 my-3 bg-secondary text-white rounded">
        <div class="row">
            <div class="col">
                <img src="https://download.logo.wine/logo/Mastercard/Mastercard-Logo.wine.png" alt="Mastercard Logo" width="50px" height="50px"
                style="float:left;width:50px;height:35px">
            </div>
            <div class="col-9">
                <p class="p-1">Mastercard</p>
            </div>
            <div class="col">
                <input type="radio" class="form-check-input" style="float:left;width:35px;height:35px">
            </div>
        </div>
    </div>
    <div class="container p-3 my-3 bg-secondary text-white rounded">
        <div class="row">
            <div class="col">
                <img src="https://www.inventicons.com/uploads/iconset/705/wm/512/Cash_on_delivery-82.png" alt="Cash On Delivery" width="50px" height="50px"
                style="float:left;width:50px">
            </div>
            <div class="col-9">
                <p class="p-1">Cash On Delivery</p>
            </div>
            <div class="col">
                <input type="radio" class="form-check-input" style="float:left;width:35px;height:35px">
            </div>
        </div>
    </div>
    <div class="container p-3 my-3">
        <div class="row">
            <button type="button" class="btn btn-outline-info btn-block">
                + Add Payment Method
            </button>
        </div>
    </div>
    <div class="container text-white">
        <h4>Order Summary</h4>
    </div>
    <div class="container flex-column bg-secondary p-3 my-4 rounded">
        <div class="row">
            <div class="col-10">
                <div class="p-2 text-white">Special Platter</div>
            </div>
            <div class="col text-info">
                <h4>1x</h4>
            </div>
            <div class="col-10">
                <div class="p-2 text-white">Pepperoni Pizza</div>
            </div>
            <div class="col text-info">
                <h4>1x</h4>
            </div>
            <div class="col-10">
                <div class="p-2 text-white">Burger</div>
            </div>
            <div class="col text-info">
                <h4>1x</h4>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-white">
        <h4>Cost Summary</h4>
    </div>
    <div class="container flex-column bg-secondary p-3 my-4 rounded">
        <div class="row">
            <div class="col-10">
                <div class="p-2 text-white">Shipping</div>
            </div>
            <div class="col-2 text-info">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>$0.20</h4>
                </div>
            </div>
            <div class="col-10">
                <div class="p-2 text-white">Items Total</div>
            </div>
            <div class="col-2 text-info">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>$35.80</h4>
                </div>
            </div>
            <div class="col-10">
                <div class="p-2 text-white">Total Payment</div>
            </div>
            <div class="col-2 text-info">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>$36.00</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <button class="btn btn-info btn-block">Confirm Order</button>
        </div>
    </div>
</body>
</html>