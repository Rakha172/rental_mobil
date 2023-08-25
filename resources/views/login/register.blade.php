<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
    <div class="container-fluid">
        <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Sign Up</h1>
            <div class="form-floating">
                <input type="text" name="name" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror"
                    id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="name">Full Name</label>
            </div>
            <div class="gender">
                <label>Gender</label><br>
                <input type="radio" name="Gender" value="Male">Male
                <input type="radio" name="Gender" value="Female">Female
            </div>
            <div class="form-floating">
                <input type="number" placeholder="Phone" name="phone_number"
                    class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                    value="{{ old('phone_number') }}">
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="phone_number">Phone</label>
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Address" name="address" class="form-control @error('address') is-invalid @enderror"
                    id="address" value="{{ old('address') }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="address">Address</label>
            </div>
            <div class="label">
                <label for="id_card_photo">Id Card Photo</label>
            </div>
            <div class="form-floating">
                <input type="image" name="id_card_photo"
                    @error('id_card_photo') is-invalid @enderror" id="id_card_photo"
                    value="{{ old('id_card_photo') }}" accept="image/*"
                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                @error('id_card_photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img src="" id="output" width="200" height="100">
            </div>
            <div class="label">
                <label for="id_card_photo">Driver Licence Photo</label>
            </div>
            <div class="form-floating">
                <input type="image" name="driver_licence_photo"
                    @error('driver_licence_photo') is-invalid @enderror"
                    id="driver_licence_photo" value="{{ old('driver_licence_photo') }}"accept="image/*"
                    onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
                @error('driver_licence_photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img src="" id="output2" width="200" height="100">
            </div>
            <div class="form-floating">
                <input type="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="email">Your Email</label>
            </div>
            <div class="form-floating">
                <input type="password" placeholder="Password" name="password"
                    class="form-control @error('password') is-invalid @enderror" id="password"
                    value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="password">Your Password</label>
            </div>
            <div class="text-center">
                <button>Submit</button>
            </div>
            <div>
                <a href="{{ route('login.index') }}">have a account?</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
