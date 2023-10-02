@extends('components.main')
<x-app-layout>
    <div class="container " style="margin-top: 100px;">
        <a href="{{ route('homepage.index') }}"><ion-icon name="arrow-back-circle-outline"
            class="shadow mb-3 p-3 bg-body rounded" style="font-size: 30px; position: relative; margin-top:-30px;
            color:black"></ion-icon></a>
            <img src="{{ asset($vehicle->image)}}" id="image">
        <form action="{{ route('order.store') }}" method="post">
            {{-- @if ($messages = session('error'))
                @dd($messages)
            @endif --}}
            @csrf
            @method('post')
            <div class=" shadow p-3 mb-5 bg-body rounded" id="box">
                <div class="form-group">
                    @if(Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @endif
                </div>

                {{-- <div class="form-group">
                    <label class="form-label" style="margin-top: 5px; margin-bottom: 5px;">Nama penyewa : <strong>{{ Auth::user()->name }}</strong></label>
                </div> --}}
            <div class="mb-3">
                <label class="form-label">Vehicle Package</label>
                <select name="vehicle_package_id" class="form-control @error('vehicle_package_id') is-invalid @enderror">
                    @foreach ($vehicle_packages as $vehicle_package)
                        <option value="{{ $vehicle_package->id }}">
                            {{ $vehicle_package->package_name }} ||
                            {{ $vehicle_package->description }} ||
                            {{ $vehicle_package->price }} ||
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
              <button class="btn btn-dark mb-3">Booking</button>

              <x-input-label for="email" :value="__('Lanjut ke halaman pembayaran')" />
            </div>
        </form>
    </div>

    <style>
        #box{
            width: 40%;
            position: relative;
            float:right;
        }
        button{
            width: 100%;
        }
        #image {
            width: 40%;
            position: absolute;
            border-radius: 10px;
        }
    </style>
</x-app-layout>
