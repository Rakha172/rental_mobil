<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Rental</title>
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

            @foreach ($settings as $setting)
            <li><img src="{{ asset($setting->image) }}" alt=""></li>
        @endforeach
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="{{ route('homepage.index') }}">Vehicle</a></li>
            <li><a href="{{ route('homepage.index') }}">Booking</a></li>

        </ul>

                <div class="header-btn">
                    <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
                    <a href="{{ route('login') }}" class="sign-in">Sign In</a>
                </div>

    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="text">
            @foreach ($settings as $item)
            <h1>Apliaksi <span>{{ $item['name'] }}</span></h1>
            <h4>{{ $item['slogan'] }}</h4>
        @endforeach

        </div>

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

            </div>

    </section>

    <script >
        let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}

    </script>
</body>

</html>
