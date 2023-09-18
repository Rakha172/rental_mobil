@extends('components.main')
<x-app-layout>
    <a href="{{ route('vehicle.index') }}"><ion-icon name="arrow-back-circle-outline"
            class="shadow p-3 mb-5 bg-body rounded" style="font-size: 30px; position: absolute; margin-left:30px; color:black"></ion-icon></a>
        <div class="container mt-5 shadow p-3 mb-5 bg-body rounded">
            <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-row mb-3">
                @csrf
                <div class="form-floating" >
                    <input style="margin-bottom: 5px;" type="file" name="image"
                        @error('image') is-invalid @enderror id="image" value="{{ old('image') }}" accept="image/*"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                        <div class="mt-3"><img src="{{ old('image') ? asset(old('image')) : '' }}" id="output"
                                style="width: 400px; margin-bottom:10px;"></div>
                </div>
                <div class="d-flex flex-column mb-3 w-100" style="margin-top: 20px; margin-left:10px;">
                <div class="form-floating">
                    <input style="margin-bottom: 5px;" type="text" name="name"
                        class="form-control @error('name') is-invalid @enderror" placeholder="name"
                        value="{{ old('name') }}">
                    <label for="name">Mobile Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: 5px;" type="text" name="brand"
                        class="form-control @error('brand') is-invalid @enderror" placeholder="Brand"
                        value="{{ old('brand') }}">
                    <label for="brand">Mobile Brand</label>
                    @error('brand')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: 5px;" type="text" name="vehicle_type"
                        class="form-control @error('vehicle_type') is-invalid @enderror" placeholder="Vehicle Type"
                        value="{{ old('vehicle_type') }}">
                    <label for="vehicle_type">Vehicle Type</label>
                    @error('vehicle_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: 5px;" type="text" name="color"
                        class="form-control @error('color') is-invalid @enderror" placeholder="Color"
                        value="{{ old('color') }}">
                    <label for="color">Color</label>
                    @error('color')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: 5px;" type="text" name="passenger_capacity"
                        class="form-control @error('passenger_capacity') is-invalid @enderror"
                        placeholder="Passenger Capacity" value="{{ old('passenger_capacity') }}">
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

</x-app-layout>
