@extends('components.main')
@include('layouts.navbar')

<body>
    <form action="{{ route('vehicle_package.index') }}" style="margin-left:110px; margin-top: 50px;">
        <button class="btn btn-primary"><ion-icon name="arrow-back-circle-outline"
                style="font-size: 20px;"></ion-icon></button>
    </form>
    <div class="container mt-3" style="background-color: white; border-radius: 10px; padding: 20px;">
        <form action="{{ route('vehicle_package.store') }}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">Package Name</label>
                <input value="{{ old('package_name') }}" name="package_name" type="text"
                    class="form-control @error('package_name') is-invalid @enderror">
                @error('package_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input value="{{ old('description') }}" name="description" type="text"
                    class="form-control @error('description') is-invalid @enderror">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Duration Date</label>
                <input value="{{ old('duration_date') }}" name="duration_date" type="text"
                    class="form-control @error('duration_date') is-invalid @enderror">
                @error('duration_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input value="{{ old('price') }}" name="price" type="text"
                    class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
