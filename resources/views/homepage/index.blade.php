<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="{{asset('/css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
