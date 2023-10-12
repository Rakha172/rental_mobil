<x-app-layout>
    <div class="container-fluid">
        <div class="card">
            <h1 class="fs-2">ADD PACKAGE</h1>
            <div class="card-body">
                <form action="{{ route("vehicle_package.store") }}" method="post">
                    @csrf
                    @method('post')
                        <div class="mb-3">
                            <select name="vehicle_id" class="form-control @error('vehicle_id') is-invalid @enderror">
                                <option value="">Select Vehicle</option>
                                @foreach ($vehicle as $vehicle)
                                    <option value="{{ $vehicle->id}}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : ''}}>
                                        {{ $vehicle->image }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('vehicle_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-floating">
                            <input style="border-radius: 8px;" type="text" name="package_name"
                                class="form-control @error('package_name') is-invalid @enderror" placeholder="package_name"
                                value="{{ old('package_name') }}">
                            <label for="package_name">Package Name</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        <div class="form-floating">
                            <input style="border-radius: 8px;" type="text" name="description"
                                class="form-control @error('description') is-invalid @enderror" placeholder="description"
                                value="{{ old('description') }}">
                            <label for="description">Description</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        <div class="form-floating">
                            <input style="border-radius: 8px;" type="text" name="duration_date"
                                class="form-control @error('duration_date') is-invalid @enderror" placeholder="duration_date"
                                value="{{ old('duration_date') }}">
                            <label for="duration_date">Duration Date</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        <div class="form-floating">
                            <input style="border-radius: 8px;" type="text" name="price"
                                class="form-control @error('price') is-invalid @enderror" placeholder="price"
                                value="{{ old('price') }}">
                            <label for="price">Price</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                <div class="btn btn-secondary ">
                    <button type="submit" style="color: black;">Submit</button>
                </div>
                <div class="btn btn-secondary">
                    <a href="{{ route('vehicle_package.index') }}" style="margin-right: 8px;color:black;">Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA8pxMsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
