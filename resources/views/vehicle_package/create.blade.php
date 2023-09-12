@extends('components.main')
<x-app-layout>
    <a href="{{ route('vehicle_package.index')}}" ><ion-icon name="arrow-back-circle-outline" class="shadow p-3 mb-5 bg-body rounded"  style="font-size: 30px; position: absolute; margin-left:30px; color:black;"></ion-icon></a>
<div class="container mt-5 shadow p-3 mb-5 bg-body rounded">
        <form action="{{ route("vehicle_package.store") }}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">Vehicle</label>
                <select name="vehicle_id" class="form-control @error('vehicle_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($vehicle as $vehicle)
                        <option value="{{ $vehicle->id}}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : ''}}>
                            {{ $vehicle->image }}
                        </option>
                    @endforeach
                </select>
                @error('vehicle_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
                  <div class="mb-3">
                    <label class="form-label">Package Name</label>
                    <input value="{{ old('package_name')}}" name="package_name" type="text" class="form-control @error('package_name') is-invalid @enderror">
                    @error('package_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input value="{{ old('description')}}" name="description" type="text" class="form-control @error('description') is-invalid @enderror">
                  @error('description')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Duration Date</label>
                <input value="{{ old('duration_date')}}" name="duration_date" type="text" class="form-control @error('duration_date') is-invalid @enderror">
                  @error('duration_date')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Price</label>
                <input value="{{ old('price')}}" name="price" type="text" class="form-control @error('price') is-invalid @enderror">
                  @error('price')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</x-app-layout>

