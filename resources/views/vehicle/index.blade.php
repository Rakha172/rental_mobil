
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylevehicle.css">
    <title>VEHICLE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container-fluid">
        <h1 class="text-center">Vehicle</h1>
        <div class="btn">
            <a href="{{ route('vehicle.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus fs-2"></i></a>
        </div>
        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
    <table class="table table-rounded">
    <thead>
        <tr class="bg-secondary">
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Vehicle Type</th>
                <th scope="col">Brand</th>
                <th scope="col">Color</th>
                <th scope="col">Passenger Capacity</th>
                <th scope="col">Option</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($vehicle as $index => $vhcle)
        <tr>
            <th scope="row">{{ $index+1}}</th>
            <td><img src="{{ asset($vhcle->image)}}" width="100"></td>
            <td>{{ $vhcle->vehicle_type }}</td>
            <td>{{ $vhcle->brand }}</td>
            <td>{{ $vhcle->color }}</td>
            <td>{{ $vhcle->passenger_capacity }}</td>
            <td class="d-flex">
                <a href="{{ route('vehicle.edit', $vhcle->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('vehicle.destroy', $vhcle->id)}}"method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</html>
=======
@extends('components.main')
@include('layouts.navbar')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('vehicle.create') }}" class="btn btn-primary mb-3"><ion-icon name="add-circle-outline" style="font-size: 20px"></ion-icon></a>
            <div class="shadow p-3 mb-5 bg-body rounded">
                @if ($pesan = session('berhasil'))
                    <div class="alert alert-primary" role="alert">
                        {{ $pesan }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Vehicle Type</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Color</th>
                            <th scope="col">Passenger Capacity</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicle as $index => $vhcle)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td><img src="{{ asset($vhcle->image) }}" width="100"></td>
                                <td>{{ $vhcle->vehicle_type }}</td>
                                <td>{{ $vhcle->brand }}</td>
                                <td>{{ $vhcle->color }}</td>
                                <td>{{ $vhcle->passenger_capacity }}</td>
                                <td>
                                    <form action="{{ route('vehicle.destroy', $vhcle->id) }}"method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('vehicle.edit', $vhcle->id) }}" class="btn btn-primary"><ion-icon name="create-outline" style="font-size: 20px"></ion-icon></a>
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><ion-icon name="trash" style="font-size: 25px"></ion-icon></button>
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
