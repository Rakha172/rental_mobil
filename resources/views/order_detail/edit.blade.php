<x-app-layout>
    <div class="container mt-5">
        <form action="{{ route('order_detail.update', $order_detail->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">Order</label>
                <select name="order_id" class="form-control @error('order_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($order as $order)
                        <option @if (old('order_id') == $order->id) selected @endif value="{{ $order->id }}">
                            {{ $order->date }}</option>
                    @endforeach
                </select>
                @error('order_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Vehicle Status</label>
                <select name="vehicle_status" class="form-control @error('vehicle_status') is-invalid @enderror">
                    <option value="">Pilih</option>
                    <option @selected(old('vehicle_status', $order_detail->vehicle_status) == 'Disewakan') value="Disewa">Disewa</option>
                    <option @selected(old('vehicle_status', $order_detail->vehicle_status) == 'Dibatalkan') value="Dibatalkan">Dibatalkan</option>
                    <option @selected(old('vehicle_status', $order_detail->vehicle_status) == 'Dikembalikan') value="Dikembalikan">Dikembalikan</option>
                </select>
                @error('vehicle_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
