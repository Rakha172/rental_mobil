<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="{{asset('/css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{ asset('images/jeep.png')}}">
    <title>Rental Mobil</title>
</head>
<body>
    <header>
        <h1 style="font-size: 24px">Vehicle</h1>
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
            {{-- <a class="navbar-brand" href="#">Order Detail</a> --}}
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
        @if(isset($vehicle))
            <div class="container">
                @foreach ( $vehicle as $vhcl )
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset($vhcl->image)}}" style="width: 250px;">
                        <ul>
                            <li>
                                Brand:
                                {{ $vhcl->brand }}
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Type:
                                {{ $vhcl->vehicle_type }}
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Color:
                                {{ $vhcl->color }}
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('order.create') }}?vehicle={{ $vhcl->id }}" data-id-vhcl="{{ $vhcl->id }}" id="booking" class="btn">Order</a>
                </div>
                @endforeach
            </div>
        @endif
    <script>
        document.querySelectorAll('#booking').forEach(function(link) {
            link.addEventListener('click', function(event) {
                const idVehicle = link.getAttribute('data-id-vhcl');

                window.location.href = 'homepage/' + idVehicle;
            });
        });
    </script>
</body>
</html>
