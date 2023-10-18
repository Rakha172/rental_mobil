<x-app-layout>
    <div class="container mt-5">

        <a href="{{ route('order_detail.create') }}" class="btn btn-primary">Tambah</a>

        @if ($pesan = session('berhasil'))
            <div class="alert alert-primary" role="alert">
                {{ $pesan }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Rental Date</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Vehicle Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_detail as $index => $od)
                    <tr>
                        <th scope="row">{{ $index }}</th>
                        <td>{{ $od->order->rental_date }}</td>
                        <td>{{ $od->order->return_date }}</td>
                        <td>{{ $od->vehicle_status }}</td>
                        <td>
                            <a href="{{ route('order_detail.edit', $od->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('order_detail.destroy', $od->id) }}"method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <td colspan="n">
</x-app-layout>
