<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style11.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .home {
            width: 100%;
            min-height: 100vh;
            position: relative;
            background-image: url({{ asset('images/bg.png') }});
            background-repeat: no-repeat;
            background-position: left;
            background-size: cover;
            display: grid;
            align-items: center;
            grid-template-columns: repeat(2, 1fr);
        }
    </style>

@foreach ($settings as $setting)
<style>
        background-image: url('{{ asset($setting->images) }}');
</style>
@endforeach
</head>

<body>
    <header>
        <td>
        <a href="" class="logo">
            @foreach ($settings as $setting)
            <li><img src="{{ asset($setting->image) }}" alt=""></li>
        @endforeach
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="{{ route('homepage.index') }}">Vehicle</a></li>
            <li><a href="{{ route('homepage.index') }}">Booking</a></li>

        </ul>
        </td>
        @if (Route::has('login'))
            @auth
                <div class="header-btn" style="margin-left: 350px; position:absolute;">
                    <ul class="navbar">
                        <li><a href="{{ route('homepage.index') }}">Home</a></li>
                    </ul>
                </div>
                <div class="header-btn">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="header-btn">
                    <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
                    <a href="{{ route('login') }}" class="sign-in">Sign In</a>
                </div>
            @endauth
        @endif
    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="text">
            @foreach ($settings as $item)
            <h1>Apliaksi <span>{{ $item['name'] }}</span></h1>
            <h4>{{ $item['slogan'] }}</h4>
        @endforeach

        </div>
        {{-- <div class="form-container">
            <form action="">
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" id="" name="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" id="" name="">
                </div>
                <input type="submit" value="simpan" class="btn">
            </form>
        </div> --}}
    </section>
    <!-- Ride -->
    <section class="ride" id="ride">
        <div class="history">
            <div class="heading">
                @foreach ($settings as $item)
                <div>
                    <h1>History</h1>

                    <h3 class="footer-about">
                        {{ $item['history'] }}
                    </h3>
                    <i class="fa fa-car"></i>
                </div>
            @endforeach

            </div>
        </div>

    </section>
    <section class="services" id="services">
        {{-- <div class="heading">
            <span>Best Services</span>
            <h1>Vehivcle</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga /1<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga /<span>1 Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga/<span>Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga /<span>Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga /<span>Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga/ <span>Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga/ <span>Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <p>2023</p>
                <h3>2021 Honda Civic</h3>
                <h2>Harga/<span>Day</span></h2>
                <a href="#" class="btn">booking</a>
            </div> --}}


        </div>
    </section>
    <section class="footer-container">
        <div class="footer">
            <div class="footer-left">
                <h3> <span> Payment Method</span> </h3>
                <div class="credit-cards">
                    <img src="{{ asset('images/gopay.png') }}" alt="">
                    <img src="{{ asset('') }}" alt="">
                    <img src="{{ asset('') }}" alt="">
                </div>
                {{-- <p class="footer-copyright">Rental Mobil</p> --}}
            </div>

            <div class="footer-center">
                <div>
                    @foreach ($settings as $item)
                    <i class="fa fa-map-marker"></i>
                    <p>{{ $item['location'] }}</p>
                </div>
                @endforeach
                <div>
                    @foreach ($settings as $item)
                    <i class="fa fa-phone"></i>
                    <p>{{ $item['no_telp'] }}</p>
                </div>
                @endforeach
                <div>
                    @foreach ($settings as $item)
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">{{ $item['email'] }}</a></p>
                </div>
                @endforeach
            </div>
            <div class="footer-right">
                @foreach ($settings as $item)
                <div>
                    <i class="fa fa-car"></i>
                    <p class="footer-about">
                        {{ $item['about_me'] }}
                    </p>
                </div>
            @endforeach

                {{-- <div class="footer-media">

                    <a href="#"><i class="fa fa-whatsapp"></i></a>

                </div> --}}
            </div>

    </section>

    <script src="main.js"></script>
</body>

</html>
