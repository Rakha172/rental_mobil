<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogin.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inika&display=swap');
    </style>
</head>

<body>
    <div class="container-fluid">
        <form action="{{ route('admin.index') }}">
            <h1>Login</h1>
            <div class="form-floating mb-4">
                <input style="background-color: rgb(155, 152, 152);" type="email" name="email"
                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " id="email"
                    placeholder="name@example.com" autofocus value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input style="background-color: rgb(155, 152, 152);" type="password" name="password"
                    class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
                <input type="checkbox" name="" id="show">
                <i>Show Password</i>
                <script>
                    let show = document.getElementById("show");
                    let password = document.getElementById("password");
                    show.onclick = function() {
                        if (password.type == "password") {
                            password.type = "text";
                        } else {
                            password.type = "password";
                        }
                    }
                </script>
            </div>
            <div class="text-center mb-7">
                <button>Sign In</button>
            </div>
            <div class="text-center mb-3">
                <a href="{{ route('register.create') }}">doesnt have a account?</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
