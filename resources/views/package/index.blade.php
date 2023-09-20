<x-app-layout>
    @extends('components.main')
    <h1 class="text-center"> Special Package</h1>
    <div class="container">
        <div class="shadow p-3 mb-5 bg-body rounded  mb-3">
            @if ($vehicle_package->count() > 0)
                @foreach ($vehicle_package as $vhpk)
                    <div class="card mb-3" style="height: 300px;">
                        <div class="card-header">
                            Package
                        </div>
                        <img src="{{ asset($vhpk->vehicle->image) }}" class="card-img-top" alt="..."
                            style="width:300px; height:200px; margin-top: 20px; margin-left: 10px; margin-bottom: 20px;">
                        <div class="card-body" style=" position: absolute; margin-left:350px; margin-top: 50px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Package Name :
                                    {{ $vhpk->package_name}}
                                </li>
                                <li class="list-group-item">
                                    Duration :
                                    {{ $vhpk->duration_date}}
                                </li>
                                <li class="list-group-item">
                                    Price  :
                                    {{ $vhpk->price  }}
                                </li>
                                <li class="list-group-item">
                                    Description :
                                    {{ $vhpk->description}}
                                </li>
                            </ul>
                            {{-- <h5 class="card-title">{{ $vhpk->package_name }}</h5>
                            <p class="card-text">{{ $vhpk->description }}
                            </p>
                            <a href="{{ route('order.create') }}?vehicle={{ $vhpk->id }}?vehicle_package={{ $vhpk->id }}" data-id-vhpk="{{ $vhpk->id }}"  data-id-vhcl="{{ $vhpk->id }}" class="btn btn-primary "
                                style="width:300px;
                                                    ">Booking Now</a>
                            <div style="position: absolute; margin-left:330px; margin-top:-40px;">
                                <input type="text" value="Available" readonly style="border-radius: 10px;">
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
