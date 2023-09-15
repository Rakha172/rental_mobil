<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/stylevehiclecreate.css">
    <title>ADD VEHICLE</title>
</head>

<body>

    <div class="container-fluid ">
        <h1>Add Vehicle</h1>
            <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input style="background-color: rgb(167, 166, 166)" type="file" name="image"
                        @error('image') is-invalid @enderror id="image"
                        value="{{ old('image') }}" accept="image/*"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="mt-3"><img src="{{ old('image') ? asset(old('image')) : '' }}" id="output" height="70"></div>
                </div>
                <div class="form-floating">
                    <input type="text" style="background-color: rgb(167, 166, 166)" name="brand"
                        class="form-control @error('brand') is-invalid @enderror" placeholder="Brand"
                        value="{{ old('brand') }}">
                    <label for="brand">Brand</label>
                    @error('brand')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" style="background-color: rgb(167, 166, 166)" name="vehicle_type"
                        class="form-control @error('vehicle_type') is-invalid @enderror" placeholder="Vehicle Type"
                        value="{{ old('vehicle_type') }}">
                    <label for="vehicle_type">Vehicle Type</label>
                    @error('vehicle_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" style="background-color: rgb(167, 166, 166)" name="color"
                        class="form-control @error('color') is-invalid @enderror" placeholder="Color"
                        value="{{ old('color') }}">
                    <label for="color">Color</label>
                    @error('color')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" style="background-color: rgb(167, 166, 166)" name="passenger_capacity"
                        class="form-control @error('passenger_capacity') is-invalid @enderror" placeholder="Passenger Capacity"
                        value="{{ old('passenger_capacity') }}">
                    <label for="passenger_capacity">Passenger Capacity</label>
                    @error('passenger_capacity')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Pesanan</label>
                    <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                        <option value="">Pilih</option>
                        <option @selected(old('status_pesanan') == 'Tersedia') value="Tersedia">Tersedia</option>
                        <option @selected(old('status_pesanan') == 'Dipesan') value="Dipesan">Dipesan</option>
                    </select>
                    @error('status_pesanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>
</html>
