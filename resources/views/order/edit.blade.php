<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Order</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route("order.update", $order->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">User</label>
                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($users as $users)
                        <option value="{{ $users->id}}" {{ old('user_id') == $users->id ? 'selected' : ''}}>
                            {{ $users->name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Package Name</label>
                <select name="vehicle_package_id" class="form-control @error('vehicle_package_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($vehicle_packages as $vehicle_packages)
                        <option value="{{ $vehicle_packages->id}}" {{ old('vehicle_package_id') == $vehicle_packages->id ? 'selected' : ''}}>
                            {{ $vehicle_packages->package_name }}
                        </option>
                    @endforeach
                </select>
                @error('vehicle_package_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
                  <div class="mb-3">
                    <label class="form-label">Rental Date</label>
                    <input value="{{ old('rental_date', $order->rental_date)}}" name="rental_date" type="date" class="form-control @error('rental_date') is-invalid @enderror">
                    @error('rental_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Return date</label>
                    <input value="{{ old('return_date', $order->return_date)}}" name="return_date" type="date" class="form-control @error('return_date') is-invalid @enderror">
                  @error('return_date')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

