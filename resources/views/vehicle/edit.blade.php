<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/create.css">
  </head>
  <body>
<x-app-layout>
    <div class="container-fluid">
        <div class="card">
            <h1 class="fs-2">EDIT VEHICLE</h1>
            <div class="card-body">
                <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data" class="d-flex flex-row mb-3">
                    @csrf
                    @method('put')
                    <div class="d-flex flex-column mb-3 w-100" style="margin-top: 20px; margin-left:10px;">
                        <div class="form-floating">
                            <div class="mb-3">
                                <input type="file" name="image" value="{{ $vehicle->image }}" class="mb-3">
                                    <img src="{{ asset($vehicle->image) }}" alt="{{ $vehicle->image }}" width="400">
                            </div>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ $vehicle->name }}">
                            <label class="form-label">Mobile Name</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="brand"
                                class="form-control @error('brand') is-invalid @enderror" value="{{ $vehicle->brand }}">
                            <label class="form-label">Mobile Brand</label>
                            @error('brand')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="vehicle_type"
                                class="form-control @error('vehicle_type') is-invalid @enderror"
                                value="{{ $vehicle->vehicle_type }}">
                            <label class="form-label">Vehicle Type</label>
                            @error('vehicle_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="color"
                                class="form-control @error('color') is-invalid @enderror" value="{{ $vehicle->color }}">
                            <label class="form-label">Mobile Color</label>
                            @error('color')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="passenger_capacity"
                                class="form-control @error('passenger_capacity') is-invalid @enderror"
                                placeholder="Passenger Capacity" value="{{ $vehicle->passenger_capacity }}">
                            <label class="form-label">Passenger Capacity</label>
                            @error('passenger_capacity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                                <option value="">Select Status</option>
                                <option @selected(old('status_pesanan', $vehicle->status_pesanan) == 'Tersedia') value="Tersedia">Tersedia</option>
                                <option @selected(old('status_pesanan', $vehicle->status_pesanan) == 'Dipesan') value="Dipesan">Dipesan</option>
                            </select>
                            @error('status_pesanan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <button type="submit" class="btn btn-secondary"  style="color: black;">Submit</button>
                            <a  class="btn btn-secondary" href="{{ route('vehicle.index') }}" style="color: black;">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        function loadImage(event) {
            var output = document.getElementById('editedImage');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA8pxMsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
