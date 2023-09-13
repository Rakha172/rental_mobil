<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/booking.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{-- <header>
        <a href="#" class="logo"><img src="{{asset('images/jeep.png')}}" alt=""></a>

       <div class="bx bx-menu" id="menu-icon"></div>
       <ul class="navbar">
        <li><a href="{{ route('homepage.index') }}">Vehicle</a></li>
        <li><a href="{{ route('package.index') }}">Vehicle Package</a></li>
        <li><a href="{{ url('homepage/' . $vehicleId ) }}"> Dtail Order</a></li>
       </ul>
       <div class="header-btn">
        <a href="#" class="sign-in"></a>
        <a href="#" class="sign-up">Profil</a>
       </div>
    </header> --}}
        @if(isset($vehicle))
                <h1 class="text-center">Order</h1>
                    <div class="container">
                        @foreach ( $vehicle as $vhcl )
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset($vhcl->image)}}" style="width: 250px;">
                                <ul>
                                    <li>
                                        {{ $vhcl->brand }}
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        {{ $vhcl->vehicle_type }}
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn">booking</a>
                            <form class="form-container" action="">
                                <div class="form-floating">
                                    <input type="text" style="background-color: rgb(167, 166, 166)" name="passenger_capacity"
                                        class="form-control @error('passenger_capacity') is-invalid @enderror" placeholder="Passenger Capacity"
                                        value="{{ old('passenger_capacity') }}">
                                    <label for="passenger_capacity"></label>
                                    @error('passenger_capacity')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </form>
                        </div>
                        @endforeach
                </div>
                @endif
        <script src="main.js"></script>
</body>
</html>
