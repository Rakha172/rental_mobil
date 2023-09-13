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
    <header>
        <a href="#" class="logo"><img src="{{asset('images/jeep.png')}}" alt=""></a>

       <div class="bx bx-menu" id="menu-icon"></div>
       <ul class="navbar">
        <li><a href="{{ route('homepage.index') }}">Vehicle</a></li>
        <li><a href="{{ route('package.index') }}">Vehicle Package</a></li>
        <li><a href="{{ route('booking.index') }}">Booking</a></li>
        <li><a href="#">Order</a></li>
       </ul>
       <div class="header-btn">
        <a href="#" class="sign-in"></a>
        <a href="#" class="sign-up">Profil</a>
       </div>
    </header>
    <div class="container mt-5">
        <form action="{{ route("order.store") }}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">User</label>
                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($users as $users)
                        <option value="{{ $users->id}}" {{ old('user_id') == $users->id ? 'selected' : ''}}>
                            {{ $users->name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Package Name</label>
                <select name="vehicle_package_id" class="form-control @error('vehicle_package_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($vehicle_packages as $vehicle_packages)
                        <option value="{{ $vehicle_packages->id}}" {{ old('vehicle_package_id') == $vehicle_packages->id ? 'selected' : ''}}>
                            {{ $vehicle_packages->package_name }}
                        </option>
                    @endforeach
                </select>
                @error('vehicle_package_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
                  <div class="mb-3">
                    <label class="form-label">Rental Date</label>
                    <input value="{{ old('rental_date')}}" name="rental_date" type="date" class="form-control @error('rental_date') is-invalid @enderror">
                    @error('rental_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Return Date</label>
                    <input value="{{ old('return_date')}}" name="return_date" type="date" class="form-control @error('return_date') is-invalid @enderror">
                  @error('return_date')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
        {{-- @if(isset($vehicle))
            <div class="text">
                </div>
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
                @endif --}}
            </div>
        </div>
        <script src="main.js"></script>
</body>
</html>
