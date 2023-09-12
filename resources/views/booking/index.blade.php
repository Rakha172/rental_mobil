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
        <a href="" class="logo"><img src="{{asset('images/jeep.png')}}" alt=""></a>

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
    </header>
    <body>
        <div class="card1-container">
            <div class="card1">
               <img src="{{asset('images/car2.jpg')}}" alt="Avatar" >
                <div class="card1-content">
                    <h2>Name Car</h2>
                    <h3>Vehicle Type</h3>
                    <h3>Brand Mobil</h3>
                    <h3>Color</h3>
                    <h3>Passanger Capacity</h3>
                </div>
            </div>
        </div>
        <div class="card2">
             <div class="card2-content">
                 <h3>Booking</h3>

                        <form class="form-container" action="">
                            <br>
                            <div class="input-box">
                                <span>unit</span>
                                <input type="search" name="" id="" placeholder="Search Places" >
                            </div>
                            <div class="input-box">
                                <span>Pick-Up Date</span>
                                <input type="date" id="" name="">
                            </div>
                            <div class="input-box">
                                <span>Return Date</span>
                                <input type="date" id="" name="">
                            </div>
                                <div class="input-box1">
                                    <span>Package</span>
                                    <input type="search" name="" id="" placeholder="Search Places">
                                </div>
                                <div class="input-box2" >
                                    <span>Harga</span>
                                    <input type="search" name="" id="" placeholder="Search Places">
                                </div>
                                <input type="submit" value="Booking" class="btn">
                        </form>
             </div>

         </div>
     </div>


    <script src="main.js"></script>
</body>
</html>
