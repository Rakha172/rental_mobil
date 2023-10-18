<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link rel="stylesheet" href="{{ asset('css/csspayment.css') }}">

</head>

<body>
    <header>
        <a href="" class="logo"><img src="img/jeep.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#">Vehicle</a></li>
            <li><a href="#">Vehicle Package</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Order</a></li>
        </ul>
        <div class="header-btn">
            <a href="#" class="sign-in"></a>
            <a href="#" class="sign-up">Profil</a>
        </div>
    </header>>
    <div class="container">
        <h2>Payment</h2>
        <div class="card">
            <h3>Data User</h3>
            <div class="content">
                <h4>Name User :</h4>
                <h4>Email :</h4>
            </div>
        </div>

        <div class="card">
            <h3>Data Vehicle</h3>
            <div class="content">
                <h4>Name Car :</h4>
                <h4>Vehicle Type :</h4>
                <h4>Brand Mobil :</h4>
                <h4>Color:</h4>
                <h4>Passanger Capacity:</h4>
            </div>
        </div>

        <div class="card">
            <h3>Data Booking</h3>
            <div class="content">
                <h4>Pick-Up Date :</h4>
                <h4>Return Date :</h4>
                <h4>Package :</h4>
                <h4>Harga:</h4>
            </div>
        </div>

        <div class="card">
            <h3>Payment</h3>
            <div class="content">
                <form class="form-container" action="">
                    <div class="input-box">
                        <span>
                            <h4>Payment Method</h4>
                        </span>
                        <select class="select">
                            <option value="">pilih</option>
                            <option value="Gopay">Gopay</option>
                            <option value="BCA">BCA</option>
                            <option value="BRI">BRI</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span>
                            <h4>Bukti Transaksi</h4>
                        </span>
                        <input type="file" name="gambar" id="gambar">

                    </div>
                    <input type="submit" value="Selesai" class="btn">
                </form>
            </div>
        </div>
    </div>


    </div>
</body>

</html>
