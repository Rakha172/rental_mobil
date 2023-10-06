<x-app-layout>
    <div class="container-fluid">
        <h1 class="text-center fs-2 mb-2">ORDER</h1>
        <div class="row">
            @if ($vehicle_package->count() > 0)
                @foreach ($vehicle_package as $vhpk)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Order</h1>
                            </div>
                            <img src="{{ asset($vhpk->vehicle->image) }}" alt="..." class="card-img-top" style="height: 200px;">
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Package Name:
                                        {{ $vhpk->package_name }}
                                    </li>
                                    <li class="list-group-item">
                                        Duration date:
                                        {{ $vhpk->duration_date }}
                                    </li>
                                    <li class="list-group-item">
                                        Price:
                                        {{ $vhpk->price }}
                                    </li>
                                    <li class="list-group-item">
                                        Description:
                                        {{ $vhpk->description }}
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center mt-2 gap-2" style="width: ">
                                    @if($vhpk->vehicle->status_pesanan != 'dipesan')
                                        <a href="{{ route('order.create', $vhpk->id) }}?vehicle={{ $vhpk->id }}" data-id-vhpk="{{ $vhpk->id }}" class="btn btn-primary">Order Now</a>
                                    @else
                                        <span class="text-muted">Di pesan</span>
                                    @endif
                                    <input type="text" value="{{ $vhpk->vehicle->status_pesanan }}" readonly class="form-control" style="border-radius: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
