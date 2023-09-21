<x-app-layout>
    @extends('components.main')
    <div class="container-fluid">
        <h1 class="text-center"> About Vehicle</h1>
            @if ($vehicle->count() > 0)
                @foreach ($vehicle as $vhpk)
                    <div class="card">
                        <div class="card-header">
                            About Vehicle
                        </div>
                        <div class="img">
                            <img src="{{ asset($vhpk->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Brend :
                                    {{ $vhpk->brand}}
                                </li>
                                <li class="list-group-item">
                                    Name :
                                    {{ $vhpk->name}}
                                </li>
                                <li class="list-group-item">
                                    Type :
                                    {{ $vhpk->vehicle_type }}
                                </li>
                                <li class="list-group-item">
                                    Passeger Capacity
                                    {{ $vhpk->passenger_capacity }}
                                </li>
                                <li class="list-group-item">
                                    Color :
                                    {{ $vhpk->color }}
                                </li>
                            </ul>
                        </div>
                    </div>

                 @endforeach
             @endif
        </div>
    </div>
</x-app-layout>
