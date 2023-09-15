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
                    <input type="text" style="background-color:rgb(167, 166, 166)" name="visi_misi" class="form-control @error('visi_misi') is-invalid @enderror" value="{{$settings->visi_misi}}">
                        <label class="form-label">Visi Misi</label>
                    @error('visi_misi')
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
