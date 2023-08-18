<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TABEL BARANG</title>
  </head>
  <body>

    <div class="container mt-5">

        <a href="{{ route('barang .create')}}" class="btn btn-primary">Tambah Barang</a>

        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mobil</th>
        <th scope="col">Jenis Mobil</th>
        <th scope="col">Merk Mobil</th>
        <th scope="col">Model Mobil</th>
        <th scope="col">Warna Mobil</th>
        <th scope="col">Kapasitas Penumpang</th>
        <th scope="col">Harga Sewa</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barang as $index => $brng)
        <tr>
            <th scope="row">{{ $index}}</th>
                <td>{{ $brng->plat_mobil }}</td>
                <td>{{ $brng->jenis_kendaraan }}</td>
                <td>{{ $brng->merek }}</td>
                <td>{{ $brng->model }}</td>
                <td>{{ $brng->warna }}</td>
                <td>{{ $brng->kapasitas_penumpang }}</td>
                <td>{{ $brng->harga_sewa }}</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                </td>
        </tr>
        @endforeach
    </tbody>
  </table>
