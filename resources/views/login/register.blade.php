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
                    <h1 class="text-center">Daftar</h1>
                <div class="form-floating mb-2">
                    <input type="text" name="nama_lengkap" class="form-control {{ $errors->has('nama_lengkap') ? 'is-invalid' : '' }} " id="nama_lengkap" placeholder="name@example.com" autofocus value="{{ old('nama_lengkap') }}">
                    <label for="nama_lengkap">User Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} " id="password" placeholder="name@example.com" autofocus value="{{ old('password') }}">
                    <label for="password"> Make Password</label>
                </div>
                <div class="form-floating mb-3">
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="confirm_password" >
                        <label for="confirm_password"> Confirm Password</label>
                </div>
                    <div class="text-center mt-3 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
