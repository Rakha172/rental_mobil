@extends('components.main')
<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h3 class="text-center">DATA PACKAGE</h3>
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
                    <a href="{{ route('vehicle_package.create') }}" class="btn btn-dark mb-2"
                        style="width:50px; padding:10px; height:40px;"><ion-icon name="add-circle-outline"
                            style="font-size: 20px;"></ion-icon></a>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">NO</th>
                                <th scope="col">Image</th>
                                <th scope="col">Package Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Duration Date</th>
                                <th scope="col">Price</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $nomor = 1 + ($vehicle_packages->currentPage() - 1) * $vehicle_packages->perPage();
                            @endphp
                            @foreach ($vehicle_packages as $index => $vhcpck)
                                <tr>
                                    <th scope="row">{{ $nomor++ }}</th>
                                    <td><img src="{{ asset($vhcpck->vehicle->image) }}" width="100"></td>
                                    <td>{{ $vhcpck->package_name }}</td>
                                    <td>{{ $vhcpck->description }}</td>
                                    <td>{{ $vhcpck->duration_date }}</td>
                                    <td>{{ $vhcpck->price }}</td>
                                    <td>
                                        <form
                                            action="{{ route('vehicle_package.destroy', $vhcpck->id) }}"method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('vehicle_package.edit', $vhcpck->id) }}"><ion-icon
                                                    name="create-outline"
                                                    style="font-size: 20px; position: absolute;color:black; "
                                                    class="shadow p-3 mb-5 bg-body rounded "></ion-icon></a>
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit"
                                                class="btn btn-xs btn-flat show-alert-delete-box btn-sm  "
                                                data-toggle="tooltip" title='Delete'><ion-icon name="trash-outline"
                                                    style="font-size: 20px; position: absolute;
                                       margin-left:50px; margin-top:-13px"
                                                    class="shadow p-3 mb-5 bg-body rounded "></ion-icon></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $user->links()}} --}}
                    {!! $vehicle_packages->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
