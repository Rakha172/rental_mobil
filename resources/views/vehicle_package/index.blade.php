@extends('components.main')
@include('layouts.navbar')
<div class="container mt-5">
    <div class="card">
        @if ($pesan = session('berhasil'))
            <div class="alert alert-primary" role="alert">
                {{ $pesan }}
            </div>
        @endif
        <h3 class="text-center mt-3">Data Vehicle Package</h3>
        <div class="card-body">
            <a href="{{ route('vehicle_package.create') }}" class="btn btn-primary"><ion-icon name="add-circle-outline"
                    style="font-size: 20px"></ion-icon></a>
            <div class="shadow p-3 mb-5 bg-body rounded">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Package Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Duration Date</th>
                            <th scope="col">Price</th>
                            <th style="width: 150px;">Image</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicle_package as $index => $vhcpck)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $vhcpck->package_name }}</td>
                                <td>{{ $vhcpck->description }}</td>
                                <td>{{ $vhcpck->duration_date }}</td>
                                <td>{{ $vhcpck->price }}</td>
                                <td><img src="{{ asset($vhcpck->image) }}" width="100"></td>
                                <td>
                                    <form action="{{ route('vehicle_package.destroy', $vhcpck->id) }}"method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('vehicle_package.edit', $vhcpck->id) }}"
                                            class="btn btn-primary"><ion-icon name="create-outline"
                                                style="font-size: 15px"></ion-icon></a>
                                        <button type="submit"
                                            class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                            data-toggle="tooltip" title='Delete'><ion-icon name="trash"
                                                style="font-size: 20px"></ion-icon></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
