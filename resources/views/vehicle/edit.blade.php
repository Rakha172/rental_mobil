<x-app-layout>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/stylevehicleedit.css">
    <title>Edit Vehicle</title>
  </head>
  <body>
    <div class="container-fluid">
        <form action="{{ route("vehicle.update", $vehicle->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h1>Edit Vehicle</h1>
        <form action="{{ route("vehicle.update", $vehicle->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-floating">
                <div class="">
                    <input type="file" name="image" value="{{$vehicle->image}}">
                    <center>
                    <img src="{{ asset($vehicle->image) }}" alt="{{ $vehicle->image }}" width="400">
                    <img src="{{ asset('upload/vehicle/' .  $vehicle->image)}}" alt="">
                </center>
                </div>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text" style="background-color:rgb(167, 166, 166)" name="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror" value="{{$vehicle->vehicle_type}}">
                    <label class="form-label">Vehicle Type</label>
                @error('vehicle_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="text" style="background-color:rgb(167, 166, 166)" name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{$vehicle->brand}}">
                    <label class="form-label">Mobile Brand</label>
                @error('brand')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" style="background-color:rgb(167, 166, 166)" name="color" class="form-control @error('color') is-invalid @enderror" value="{{$vehicle->color}}">
                    <label class="form-label">Mobile Color</label>
                @error('color')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" style="background-color:rgb(167, 166, 166)" name="passenger_capacity" class="form-control @error('passenger_capacity') is-invalid @enderror" placeholder="Passenger Capacity" value="{{$vehicle->passenger_capacity}}">
                    <label class="form-label">Passenger Capacity</label>
                @error('passenger_capacity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Status Pesanan</label>
                <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                    <option value="">Pilih</option>
                    <option @selected(old('status_pesanan', $vehicle->status_pesanan) == 'Tersedia') value="Tersedia">Tersedia</option>
                    <option @selected(old('status_pesanan', $vehicle->status_pesanan) == 'Dipesan') value="Dipesan">Dipesan</option>
                </select>
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
