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
                <form action="{{  route('login.store') }}" method="PUT">
                    @csrf
                    <h1 class="text-center">Daftar</h1>
                <div class="form-floating mb-2">
                    <input type="text" name="Username" class="form-control {{ $errors->has('Username') ? 'is-invalid' : '' }} " id="Username" placeholder="name@example.com" autofocus value="{{ old('Username') }}">
                    <label for="Username">Username</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="number" name="nomer_tlp" class="form-control {{ $errors->has('nomer_tlp') ? 'is-invalid' : '' }} " id="nomer_tlp" placeholder="name@example.com" autofocus value="{{ old('nomer_tlp') }}">
                    <label for="nomer_tlp">Nomer tlp</label>
                </div>
                <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                        <label for="password">Password</label>
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
