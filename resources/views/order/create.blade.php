<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Order</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route("order.store") }}" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                    <img src="{{ asset($vehicle->image)}}" style="width: 250px;">
            </div>
            <div class="form-group">
                <label class="form-label">User ID</label>
                <input name="user_id" type="name" class="form-control" value="{{ auth()->user()->id }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Vehicle Package</label>
                <select name="vehicle_package_id" class="form-control @error('vehicle_package_id') is-invalid @enderror">
                    <option value="" selected>Pilih</option>
                    @foreach ($vehicle_packages as $vehicle_package)
                        <option value="{{ $vehicle_package->id }}">
                            {{ $vehicle_package->package_name }}
                            {{ $vehicle_package->description }}
                            {{ $vehicle_package->price }}
                        </option>
                    @endforeach
                </select>
                @error('vehicle_package_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
                  <div class="mb-3">
                    <label class="form-label">Rental Date</label>
                    <input value="{{ old('rental_date')}}" name="rental_date" type="date" class="form-control @error('rental_date') is-invalid @enderror">
                    @error('rental_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Return Date</label>
                    <input value="{{ old('return_date')}}" name="return_date" type="date" class="form-control @error('return_date') is-invalid @enderror">
                  @error('return_date')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <button style="width: 1120px;" onclick="window.location.href='{{ route('payment.create') }}'" class="btn btn-primary">Booking dan Lakukan Pembayaran</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

