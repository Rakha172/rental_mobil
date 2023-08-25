<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .container {
        width: 400px;
    }
</style>

<body>
    <div class="container mt-5 width">
        <div class="card">
            <div class="body-card">
                <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="text-center">Sign Up</h1>
                    <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="name">Full Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select name="gender" id="gender" class="form-control">
                            <option value="">--Select Gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="gender">Gender</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="number" name="phone_number"
                            class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                            value="{{ old('phone_number') }}">
                        @error('phone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="phone_number">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                            id="address" value="{{ old('address') }}">
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="address">Address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="file" name="id_card_photo"
                            class="form-control @error('id_card_photo') is-invalid @enderror" id="id_card_photo"
                            value="{{ old('id_card_photo') }}" accept="image/*"
                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('id_card_photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="id_card_photo">Id Card</label>
                        <div class="mt-3"><img src="" id="output" width="200"></div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="file" name="driver_licence_photo"
                            class="form-control @error('driver_licence_photo') is-invalid @enderror"
                            id="driver_licence_photo" value="{{ old('driver_licence_photo') }}"accept="image/*"
                            onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
                        @error('driver_licence_photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="driver_licence_photo">Driver Licence</label>
                        <div class="mt-3"><img src="" id="output2" width="200"></div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="email">Your Email</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="password">Your Password</label>
                        <input type="checkbox" name="" id="show">
                        <i>Show Password</i>
                        <script>
                            let show = document.getElementById("show");
                            let password = document.getElementById("password");

                            show.onclick = function (){
                                if(password.type == "password"){
                                    password.type = "text";
                                }else {
                                    password.type = "password";
                                }
                            }
                        </script>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                    <a href="{{ route('login.index') }}">have a account?</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
