<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="{{asset('/css/vehicle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{ asset('images/jeep.png')}}">
    <title>Rental Mobil</title>
</head>
<body>
    <header>
        <a href="" class="logo"><img src="{{asset('images/jeep.png')}}" alt=""></a>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage.index') }}">Vehicle</a>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('package.index') }}">Vehicle Package</a>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Booking</a>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Order</a>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('profile.edit')}}">Profile</a>
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('admin.index') }}">Page admin</a>
                @endif
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </nav>
    </header>
        @if($vehicle->count()>0)
        <section class="services" id="services">
            <div class="services-container">
                @foreach ( $vehicle as $vhcl )
                <div class="box" style="width: 250px;">
                    <div class="box-img">
                        <img src="{{ asset($vhcl->image)}}" style="width: 230px;">
                    </div>

                    <a href="#" class="btn">booking</a>
                </div>
                @endforeach
                @else
                <h4 style="margin-top: 100px; text-align:center; color: grey;">There is no vehicle data, please input item data</h4>
                <a href="{{ route('vehicle.index') }}" style="margin-left:620px; border: 1px solid grey; border-radius:5px; color:grey; padding: 5px; margin-top: 10px; position: absolute; ">Vehicle Page</a>
            </div>
            @endforeach
        </div>
        @endif
    <script src="main.js"></script>
</body>
</html>
