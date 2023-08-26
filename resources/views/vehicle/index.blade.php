<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TABEL VEHICLE</title>
  </head>
  <body>

    <div class="container mt-5">

        <a href="{{ route('vehicle.create')}}" class="btn btn-primary">Tambah Vehicle</a>

        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
<table class="table">
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
            <th scope="row">{{ $index+1}}</th>
                <td><img src="{{ asset($vhcle->image)}}" width="100"></td>
                <td>{{ $vhcle->vehicle_type }}</td>
                <td>{{ $vhcle->brand }}</td>
                <td>{{ $vhcle->color }}</td>
                <td>{{ $vhcle->passenger_capacity }}</td>
                <td>
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
