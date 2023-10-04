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
                <h1 class="fs-2">EDIT PACKAGE</h1>
                <div class="card-body">
                        <form action="{{ route("vehicle_package.update", $vehicle_packages->id) }}" method="POST">
                            @csrf
                            @method('put')
                                <div class="mb-3">
                                    <label class="form-label">Vehicle</label>
                                    <select name="vehicle_id" class="form-control @error('vehicle_id') is-invalid @enderror">
                                        <option value="">Pilih</option>
                                        @foreach ($vehicle as $vehicle)
                                            <option value="{{ $vehicle->id}}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : ''}}>
                                                {{ $vehicle->image }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('vehicle_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Package Name</label>
                                    <input value="{{ old('package_name', $vehicle_packages->package_name)}}" name="package_name" type="text" class="form-control @error('package_name') is-invalid @enderror">
                                    @error('package_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input value="{{ old('description', $vehicle_packages->description)}}" name="description" type="text" class="form-control @error('description') is-invalid @enderror">
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Duration Date</label>
                                <input value="{{ old('duration_date', $vehicle_packages->duration_date)}}" name="duration_date" type="text" class="form-control @error('duration_date') is-invalid @enderror">
                                @error('duration_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input value="{{ old('price', $vehicle_packages->price)}}" name="price" type="text" class="form-control @error('price') is-invalid @enderror">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center gap-2">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                                <a href="{{ route('vehicle_package.index')}}" class="btn btn-secondary" >Back</a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </x-app-layout>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA8pxMsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


