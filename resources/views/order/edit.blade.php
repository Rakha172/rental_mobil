<x-app-layout>
    <div class="container mt-5">
        <form action="{{ route('order.update', $order->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="form-label">User ID</label>
                <input name="user_id" type="number" class="form-control" value="{{ auth()->user()->id }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Vehicle Package</label>
                <select name="vehicle_package_id"
                    class="form-control @error('vehicle_package_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($vehicle_packages as $vehicle_packages)
                        <option @selected(old('vehicle_packages', $order->vehicle_package_id) == $vehicle_packages->id) value={{ $vehicle_packages->id }}>
                            {{ $vehicle_packages->package_name }}</option>
                    @endforeach
                </select>
                @error('vehicle_package_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Rental Date</label>
                <input value="{{ old('rental_date', $order->rental_date) }}" name="rental_date" type="date"
                    class="form-control @error('rental_date') is-invalid @enderror">
                @error('rental_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Return Date</label>
                <input value="{{ old('return_date', $order->return_date) }}" name="return_date" type="date"
                    class="form-control @error('return_date') is-invalid @enderror">
                @error('return_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
