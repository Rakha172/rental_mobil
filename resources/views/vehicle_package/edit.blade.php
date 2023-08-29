<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Vehicle package</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route("vehicle_package.update", $vehicle_packages->id) }}" method="POST">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label class="form-label">Vehicle</label>
                    <select name="vehicle_id" class="form-control @error('vehicle_id') is-invalid @enderror">
                        <option value="">Pilih</option>
                        @foreach ($vehicle as $vehicle)
                            <option @selected(old('vehicle') == $vehicle->id) value={{ $vehicle->id }}>{{ $vehicle->image }}</option>
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
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

