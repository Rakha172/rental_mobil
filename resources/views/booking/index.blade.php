<x-app-layout>
    @extends('components.main')
    <div class="container-fluid">
        <h1 class="text-center">Order</h1>
        {{-- <div class="shadow p-3 mb-5 bg-body rounded  mb-3"> --}}
            @if ($vehicle_package->count() > 0)
                @foreach ($vehicle_package as $vhpk)
                    <div class="card">
                        <div class="img">
                            <img src="{{ asset($vhpk->vehicle->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Package Name :
                                    {{ $vhpk->package_name }}
                                </li>
                                <li class="list-group-item">
                                    Duration date :
                                    {{ $vhpk->duration_date }}
                                </li>
                                <li class="list-group-item">
                                    Price :
                                    {{ $vhpk->price }}
                                </li>
                                <li class="list-group-item">
                                    Description :
                                    {{ $vhpk->description }}
                                </li>
                            </ul>
                            @if ($payment->count()<1)
                            <a href=" {{ route('order.create') }}?vehicle={{ $vhpk->id }}"
                                data-id-vhpk="{{ $vhpk->id }} " class="btn btn-primary "
                                style="width:300px;">Order Now</a>
                                <div style="position: absolute; margin-left:330px; margin-top:-40px;">
                                    <input type="text" value="{{$vhpk->vehicle->status_pesanan}}" readonly style="border-radius: 10px;">
                                </div>
                            @else
                            <button class="btn btn-danger">Sudah di pesan </button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                @endif
        </div>
    </div>
</x-app-layout>
