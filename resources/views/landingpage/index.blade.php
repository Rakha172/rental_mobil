<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style11.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <a href="" class="logo"><img src="img/jeep.png" alt=""></a>

       <div class="bx bx-menu" id="menu-icon"></div>
       <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li><a href="#">Vehivcle</a></li>
        <li><a href="#">Booking</a></li>

       </ul>
       <div class="header-btn">
        <a href="{{ route('register') }}" class="sign-up">Sign Up</a>
        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
       </div>
    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="text">
            <h1>Aplikasi <span>Rental</span><br>Mobil</h1>
            <p>Rental mobil merupakan salah satu usaha  yang bergerak <br> di bidang jasa tranportasi.</p>
        </div>
        <div class="form-container">
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
        </div>
    </section>
    <!-- Ride -->
    <section class="ride" id="ride">
        <div class="heading">
           <span>How Its Work</span>
           <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                 <i class="bx bxs-map"></i>
                 <h2>Location</h2>
                 <p>Indonesia,Jawa Barat,cimahi,cidahu</p>
            </div>

            <div class="box">
                <i class="bx bxs-calendar-check"></i>
                <h2>Pick-Up Date</h2>
                <p>Tanggal Awal Pemesanan</p>
           </div>

           <div class="box">
            <i class="bx bxs-calendar-star"></i>
            <h2>Book A Car</h2>
            <p>Tanggal Pengembalian</p>
       </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Vehivcle</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga /1<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga /<span>1 Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga /<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

             <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga /<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga/ <span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga/ <span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                    <p>2023</p>
                    <h3>2021 Honda Civic</h3>
                    <h2>Harga/<span>Day</span></h2>
                    <a href="#" class="btn">booking</a>
            </div>


        </div>
    </section>
    <section class="footer-container">
        <div class="footer">
            <div class="footer-left">
                <h3> <span> Payment Method</span> </h3>
                <div class="credit-cards">
                    <img src="img/png-transparent-removebg-preview.png" alt="">
                    <img src="img/png-transparent1-removebg-preview.png" alt="">
                    <img src="img/bri-removebg-preview.png" alt="">
                </div>
                <p class="footer-copyright">Rental Mobil</p>
            </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p> Indonesia,Jawa Barat,Bandung</p>
            </div>
            <div>
             <i class="fa fa-phone"></i>
             <p>+62 000 000 00</p>
            </div>
            <div>
             <i class="fa fa-envelope"></i>
             <p><a href="#">Support@gmail.com</a></p>

            </div>
        </div>
            <div class="footer-right">
                <div>
            <i class="fa fa-car"></i>
            <p class="footer-about">
                About <br> Menyediakan berbagai pilihan unit mobil
                mulai dari Avanza, Innova Reborn, Hiace, Alphard, Luxury Car
                 dan berbagai pilihan lainnya
            </p>

            </div>
            <div class="footer-media">

                <a href="#"><i class="fa fa-whatsapp"></i></a>

            </div>
        </div>

    </section>

    <script src="main.js"></script>
</body>
</html>
