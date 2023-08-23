<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>.container {
    width: 400px;
  }
  </style>
  <body>
    <div class="container mt-5 width">
        <div class="card">
            <div class="body-card">
                <form action="{{  route('register.store') }}" method="POST">
                    @csrf
                    <h1 class="text-center">Sign Up</h1>
                <div class="form-floating mb-2">
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " id="name" placeholder="name@example.com" autofocus value="{{ old('name') }}">
                    <label for="name">Full Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="gender" name="gender" class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }} " id="gender" placeholder="name@example.com" autofocus value="{{ old('gender') }}">
                    <label for="gender">Gender</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="phone_number" name="phone_number" class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }} " id="phone_number" placeholder="name@example.com" autofocus value="{{ old('phone_number') }}">
                    <label for="phone_number">Phone</label>
                </div>
                <div class="form-floating mb-3">
                        <input type="password" name="address" class="form-control" id="address" placeholder="address" >
                        <label for="address">Address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="file" name="id_card_photo" class="form-control {{ $errors->has('id_card_photo') ? 'is-invalid' : '' }} " id="id_card_photo" placeholder="id_card_photo@example.com" autofocus value="{{ old('id_card_photo') }}">
                    <label for="id_card_photo">Id Card</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="file" name="driver_licence_photo" class="form-control {{ $errors->has('driver_licence_photo') ? 'is-invalid' : '' }} " id="driver_licence_photo" placeholder="driver_licence_photo@example.com" autofocus value="{{ old('driver_licence_photo') }}">
                    <label for="driver_licence_photo">Driver Licence</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " id="email" placeholder="email@example.com" autofocus value="{{ old('email') }}">
                    <label for="email">Your Email</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} " id="password" placeholder="password@example.com" autofocus value="{{ old('password') }}">
                    <label for="password">Your Password</label>
                </div>
                <div class="text-center mb-7">
                    <button type="sign in" style="width: 350px; height: 40px;" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
