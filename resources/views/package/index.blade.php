<x-app-layout>
    @extends('components.main')
    <div class="container-fluid">
        <h1 class="text-center"> Special Package</h1>
            @if ($vehicle_package->count() > 0)
                @foreach ($vehicle_package as $vhpk)
                    <div class="card">
                        <div class="card-header">
                            Package
                        </div>
                        <div class="img">
                            <img src="{{ asset($vhpk->vehicle->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
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
                        </div>
                    </div>
                @endforeach
            @endif
    </div>
</x-app-layout>
