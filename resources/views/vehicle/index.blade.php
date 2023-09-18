@extends('components.main')
<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h3 class="text-center">DATA VEHICLE</h3>
                    <form action="" method="GET">
                        <div class="row mb-2">
                            <label for="search" class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Please input key for search data" name="search"
                                    autofocus style="border-radius:5px; width:80%;" value="{{ $search }}">
                                <button class="btn btn-dark" style="height:42px;">Search</button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('vehicle.create') }}" class="btn btn-dark mb-2"
                        style="width:50px;
                    padding:10px; height:40px;"><ion-icon
                            name="add-circle-outline" style="font-size: 20px;"></ ion-icon></a>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Vehicle Type</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Color</th>
                                <th scope="col">Passenger Capacity</th>
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
                                        <td class="d-flex" style="width: 100px;">
                                            <form action="{{ route('vehicle.destroy', $vhcle->id) }}"method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('vehicle.edit', $vhcle->id) }}"><ion-icon
                                                        name="create-outline"
                                                        style="font-size: 20px; position: absolute;color:black; "
                                                        class="shadow p-3 mb-5 bg-body rounded "></ion-icon></a>
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit"
                                                    class="btn btn-xs btn-flat show-alert-delete-box btn-sm  "
                                                    data-toggle="tooltip" title='Delete'><ion-icon name="trash-outline"
                                                        style="font-size: 20px; position: absolute; margin-left:50px; margin-top:-13px"
                                                        class="shadow p-3 mb-5 bg-body rounded "></ion-icon></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {!! $vehicle->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
