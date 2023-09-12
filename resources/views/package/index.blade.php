<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="" class="logo"><img src="{{asset("images/jeep.png")}}" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="{{ route("homepage.index") }}">Vehicle</a></li>
            <li><a href="{{ route('package.index') }}">Vehicle Package</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Order</a></li>
        </ul>
        <div class="header-btn">
            <a href="#" class="sign-up"></a>
            <a href="#" class="sign-in">Profil</a>
        </div>
    </header>
    @if (isset($vehicle_package))
    <section class="package" id="package">
        <div class="heading">
            <br>
            <br>
            <h1>Vehicle Package</h1>
        </div>
        <div class="package-container">
            @foreach ($vehicle_package as $vhclpck)
            <div class="card">
                <img src="{{asset($vhclpck->vehicle->image)}}" width="80">
                <ul>
                    <li>{{ $vhclpck->package_name }}</li>
                </ul>
                <ul>
                    <li>{{ $vhclpck->description }}</li>
                </ul>
                <ul>
                    <li>{{ $vhclpck->price }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </section>
    @endif
    <script src="main.js"></script>
</body>
</html>
