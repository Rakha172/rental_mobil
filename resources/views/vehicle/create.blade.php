<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADD VEHICLE</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Add Vehicle</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="file" name="image"
                            class="form-control @error('image') is-invalid @enderror" id="image"
                            value="{{ old('image') }}" accept="image/*"
                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="image">Id Card</label>
                        <div class="mt-3"><img src="" id="output" width="200"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vehicle Type</label>
                        <select name="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror">
                            <option value="">choose</option>
                            <option @selected(old('vehicle_type') == 'Sedan') value="Sedan">Sedan</option>
                            <option @selected(old('vehicle_type') == 'SUV') value="SUV">SUV</option>
                            <option @selected(old('vehicle_type') == 'MPV') value="MPV">MPV</option>
                            <option @selected(old('vehicle_type') == 'Minivan') value="Minivan">Minivan</option>
                        </select>
                        @error('vehicle_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile Brand</label>
                        <select name="brand" class="form-control @error('brand') is-invalid @enderror">
                            <option value="">choose</option>
                            <option @selected(old('brand') == 'Toyota') value="Toyota">Toyota</option>
                            <option @selected(old('brand') == 'Honda') value="Honda">Honda</option>
                            <option @selected(old('brand') == 'BMW') value="BMW">BMW</option>
                            <option @selected(old('brand') == 'Suzuki') value="Suzuki">Suzuki</option>
                            <option @selected(old('brand') == 'Hyundai') value="Hyundai">Hyundai</option>
                            <option @selected(old('brand') == 'Mitsubishi') value="Mitsubishi">Mitsubishi</option>
                            <option @selected(old('brand') == 'Daihatsu') value="Daihatsu">Daihatsu</option>
                        </select>
                        @error('brand')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile Color</label>
                        <select name="color" class="form-control @error('color') is-invalid @enderror">
                            <option value="">choose</option>
                            <option @selected(old('color') == 'Black') value="Black">Black</option>
                            <option @selected(old('color') == 'White') value="White">White</option>
                            <option @selected(old('color') == 'Silver') value="Silver">Silver</option>
                        </select>
                        @error('color')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Passenger Capacity</label>
                        <select name="passenger_capacity"
                            class="form-control @error('passenger_capacity') is-invalid @enderror">
                            <option value="">choose</option>
                            <option @selected(old('passenger_capacity') == '15 passenger') value="15 passenger">15 passenger</option>
                            <option @selected(old('passenger_capacity') == '7 passenger') value="7 passenger">7 passenger</option>
                            <option @selected(old('passenger_capacity') == '5 passenger') value="5 passenger">5 passenger</option>
                        </select>
                        @error('passenger_capacity')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>

</body>

</html>
