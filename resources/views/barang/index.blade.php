@extends('components.main')
<div class="container mt-5">

    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>

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
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $brng->mobile }}</td>
                    <td>{{ $brng->vehicle_type }}</td>
                    <td>{{ $brng->brang }}</td>
                    <td>{{ $brng->model }}</td>
                    <td>{{ $brng->color }}</td>
                    <td>{{ $brng->passenger_capacity }}</td>
                    <td>{{ $brng->rental_price }}</td>
                    <td>
                        <form action="{{ route('barang.destroy', $brng->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('barang.edit', $brng->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">HAPUS</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
