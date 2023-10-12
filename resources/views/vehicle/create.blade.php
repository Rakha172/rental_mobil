<x-app-layout>
    <div class="container-fluid">
        <div class="card p-2">
            <h1 class="fs-2 mt-2">ADD VEHICLE</h1>
            <div class="card-body">
                    <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-row mb-3">
                        @csrf
                        <div class="d-flex flex-column mb-3 w-100" style="margin-top: 20px; margin-left:10px;">
                            <div class="form-floating" >
                                <input style="border-radius: 8px;" type="file" name="image"
                                    @error('image') is-invalid @enderror id="image" value="{{ old('image') }}" accept="image/*"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                    <div class="mt-3"><img src="{{ old('image') ? asset(old('image')) : '' }}" id="output"
                                            style="width: 400px; margin-bottom:10px;"></div>
                            </div>
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
                                <select name="status_pesanan" class="form-control @error('status_pesanan') is-invalid @enderror">
                                    <option value="">Select Status</option>
                                    <option @selected(old('status_pesanan') == 'Tersedia') value="Tersedia">Tersedia</option>
                                    <option @selected(old('status_pesanan') == 'Dipesan') value="Dipesan">Dipesan</option>
                                </select>
                                @error('status_pesanan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="centered-buttons">
                                <div class="btn btn-secondary">
                                    <button type="submit" style="color: black;">Submit</button>
                                </div>
                                <div class="btn btn-secondary">
                                    <a href="{{ route('vehicle.index') }}" style="margin-right: 8px;color:black;">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
