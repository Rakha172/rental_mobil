<x-app-layout>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/stylevehicleedit.css">
        <title>Edit Seeting</title>
      </head>
      <body>
        <div class="container-fluid">
            <form action="{{ route("setting.update", $settings->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1>Edit Setting</h1>
            <form action="{{ route("setting.update", $settings->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$settings->name}}">
                        <label class="form-label">Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="history" class="form-control @error('history') is-invalid @enderror" value="{{$settings->history}}">
                        <label class="form-label">History</label>
                    @error('history')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <div class="">
                        <input type="file" name="image" value="{{$settings->image}}">
                        <center>
                        <img src="{{ asset($settings->image) }}" alt="{{ $settings->image }}" width="400">
                        <img src="{{ asset('upload/vehicle/' .  $settings->image)}}" alt="">
                    </center>
                    </div>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
      <div class="form-floating">
        <div class="">
            <input type="file" name="images" value="{{$settings->images}}">
            <center>
                <img src="{{ asset($settings->images) }}" alt="{{ $settings->images }}" width="400">
                <img src="{{ asset('upload/vehicle/' .  $settings->images)}}" alt="">
            </center>
        </div>
        @error('images')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

                  <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="location" class="form-control @error('location') is-invalid @enderror" value="{{$settings->location}}">
                        <label class="form-label">Location</label>
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{$settings->no_telp}}">
                        <label class="form-label">No Telp</label>
                    @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$settings->email}}">
                        <label class="form-label">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="about_me" class="form-control @error('about_me') is-invalid @enderror" value="{{$settings->about_me}}">
                        <label class="form-label">About Me</label>
                    @error('about_me')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="slogan" class="form-control @error('slogan') is-invalid @enderror" value="{{$settings->slogan}}">
                        <label class="form-label">Slogan</label>
                    @error('slogan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            function loadImage(event) {
                var output = document.getElementById('editedImage');
                output.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
      </body>
    </html>
    </x-app-layout>
