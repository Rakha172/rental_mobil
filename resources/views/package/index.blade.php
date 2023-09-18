<x-app-layout>
    @extends('components.main')
    <div class="container mt-3">
        <div class="shadow p-3 mb-5 bg-body rounded  mb-3">
            <h3 class="text-center">SPECIAL PACKAGE</h3>
            @if ($vehicle_package->count() > 0)
                @foreach ($vehicle_package as $vhpk)
                    <div class="card mb-3" style="height: 300px;">
                        <div class="card-header">
                            Package
                        </div>
                        <img src="{{ asset($vhpk->vehicle->image) }}" class="card-img-top" alt="..."
                            style="width:30%; height:100%;">
                        <div class="card-body" style=" position: absolute; margin-left:350px; margin-top: 50px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Duration date:
                                    {{ $vhpk->duration_date }}
                                </li>
                                <li class="list-group-item">
                                    Price:
                                    {{ $vhpk->price }}
                                </li>
                            </ul>
                            <h5 class="card-title">{{ $vhpk->package_name }}</h5>
                            <p class="card-text">{{ $vhpk->description }}
                            </p>
                            <a href=" {{ route('order.create') }}?vehicle={{ $vhpk->id }}"
                                data-id-vhpk="{{ $vhpk->id }} " class="btn btn-primary "
                                style="width:300px;
                                                    ">Booking
                                Now</a>
                            <div style="position: absolute; margin-left:330px; margin-top:-40px;">
                                <input type="text" value="Available" readonly style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>
        </div>
        @endforeach
        @endif
    </div>
    </div>
    <script>
        document.querySelectorAll('#booking').forEach(function(link) {
            link.addEventListener('click', function(event) {
                const idvehicle_package = link.getAttribute('data-id-vhcl');

                window.location.href = 'homepage/' + idVehicle;
            });
        });
    </script>
</x-app-layout>
