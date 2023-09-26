@extends('components.mainadmin')
<x-app-layout>
    <div class="container-fluid">
        <h1 class="text-center">DATA VEHICLE</h1>
        <div class="card">
            <div class="card-body">
                    <form action="" method="GET">
                        <div class="col-sm-10 d-flex">
                            <a href="{{ route('vehicle.create') }}" class="btn btn-light" style="margin-right: 8px;">Add</a>
                            <input type="text" placeholder="Please input key for search data" name="search" autofocus style="border-radius:5px; width:700px; margin-bottom:1rem;" value="{{ $search }}">
                            <button class="btn ml-2 btn-light" style="height:42px; color:black;">Search</button>
                        </div>
                </form>
                <div class="table-responsive">

                    <table class="table table-bordered table-center">
                        <thead>
                            <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Vehicle Type</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Color</th>
                                <th scope="col">Passenger Capacity</th>
                                <th scope="col">Status Pesanan</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($vehicle))
                                @foreach ($vehicle as $index => $vhcle)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td><img src="{{ asset($vhcle->image) }}" width="100"></td>
                                        <td>{{ $vhcle->name }}</td>
                                        <td>{{ $vhcle->vehicle_type }}</td>
                                        <td>{{ $vhcle->brand }}</td>
                                        <td>{{ $vhcle->color }}</td>
                                        <td>{{ $vhcle->passenger_capacity }}</td>
                                        <td>{{ $vhcle->status_pesanan }}</td>
                                        <td class="d-flex">
                                            <form action="{{ route('vehicle.destroy', $vhcle->id) }}" method="POST">
                                              @csrf
                                              @method('delete')
                                              <a href="{{ route('vehicle.edit', $vhcle->id) }}" class="btn btn-light" >Edit</a>
                                              <input name="_method" type="hidden" value="DELETE">
                                              <button type="submit" class="btn btn-light">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                    {!! $vehicle->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

