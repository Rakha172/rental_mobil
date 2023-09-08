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
        <a href="" class="logo"><img src="{{asset('images/jeep.png')}}" alt=""></a>

       <div class="bx bx-menu" id="menu-icon"></div>
       <ul class="navbar">
        <li><a href="#">Vehicle</a></li>
        <li><a href="#">Vehicle Package</a></li>
        <li><a href="#">Booking</a></li>
        <li><a href="#">Order</a></li>


       </ul>
       <div class="header-btn">
        <a href="#" class="sign-up"></a>
       <i class="fa fa-profil"> <a href="{{ route('profile.edit')}}" class="sign-in">Profile</a></i>
        <a style="">{{ Auth::user()->name}}</a>
        @if (Auth::user()->role == 'admin')
            <a href="{{ route('admin.index') }}">Page admin</a>
        @endif
       </div>
       <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
       </div>
    </header>
    <!-- Vehicle -->
yusup
  <!-- Vehicle -->
@if(isset($vehicle))
<section class="services" id="services">
    <div class="services-container">
        @foreach ( $vehicle as $vhcl )
        <div class="box">
            <div class="box-img">
                <img src="{{ asset($vhcl->image)}}" width="100px" height="100px">
                <ul>
                    <li>
                        {{ $vhcl->vehicle_type }}
                    </li>
                </ul>
                    <ul>
                        <li>
                            {{ $vhcl->brand }}
                        </li>
                    </ul>

            </div>
            <p></p>
            <h3></h3>
            <h2><span></span></h2>
            <a href="#" class="btn">booking</a>
        </div>
        @endforeach
    </div>
</section>
@endif


            {{-- <div class="box">
=======
    <section class="services" id="services">
        <div class="heading">
            <br>
            <br>
            <h1>Vehicle</h1>
        </div>
        <div class="services-container">
            @if ($vehicle->count()>0)
            @foreach ($vehicle as $index => $vhcle)
            <div class="box">
                <div class="box-img">
                    <img src="{{ asset($vhcle->image)}}">
                </div>
                    <p>{{ $index+1}}</p>
                    <h3>Name Car</h3>
                    <h3>Brand : {{$vhcle->brand}}</h3>
                    <h3>Color :  {{$vhcle->color}}</h3>
                    <h3>Passenger capacity : {{$vhcle->passenger_capacity}}</h3>
                    <h2>Harga /1<span>Day</span></h2>
                    <a href="" class="btn">booking</a>
            </div>
            @endforeach
            @elseif (Auth::user()->role == 'admin')
                <p>Tidak ada data vehicle, silahkan mengisi-> data di vehicle </p>
                <a href="{{ route('vehicle.index') }}">Vehicle</a>
            @endif
            <div class="box">
 main
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga /<span>1 Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga /<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

             <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga /<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/ <span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/ <span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/')}}" alt="">
                </div>
                    <p>2023</p>
                    <h3>Name Car</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>


        </div>
     --}}

    <script src="main.js"></script>
</body>
</html>
