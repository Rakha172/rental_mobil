@extends('components.main')
<div class="container mt-5">
    <form action="{{ route('barang.update', $items->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label class="form-label">Mobil</label>
            <input value="{{ $items->mobile }}" name="mobile" type="text"
                class="form-control @error('mobile') is-invalid @enderror">
            @error('mobile')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Mobil</label>
            <input value="{{ $items->vehicle_type }}" name="vehicle_type" type="text"
                class="form-control @error('vehicle_type') is-invalid @enderror">
            @error('vehicle_type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Merek Mobil</label>
            <input value="{{ $items->brand }}" name="brand" type="text"
                class="form-control @error('brand') is-invalid @enderror">
            @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Model Mobil</label>
            <input value="{{ $items->model }}" name="model" type="text"
                class="form-control @error('model') is-invalid @enderror">
            @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Warna Mobil</label>
            <input value="{{ $items->color }}" name="color" type="text"
                class="form-control @error('color') is-invalid @enderror">
            @error('color')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Kapasitas Penumpang</label>
            <input value="{{ $items->passenger_capacity }}" name="passenger_capacity" type="number"
                class="form-control @error('passenger_capacity') is-invalid @enderror">
            @error('passenger_capacity')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Sewa</label>
            <input value="{{ $items->rental_price }}" name="rental_price" type="text"
                class="form-control @error('rental_price') is-invalid @enderror">
            @error('rental_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
