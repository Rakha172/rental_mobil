<x-app-layout>
    @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
            {{ $pesan }}
        </div>
    @endif
    <div class="container" style="margin-top: 50px; position: absolute;">
        <h1 class="text-center mt-5 fs-1">Histori transaksi anda</h1>
        <div class="table-responsive mt-5 pad">
            <table class="table table-bordered table-center">
                <thead>
                    <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
                        <th scope="col">NO</th>
                        <th scope="col">Nama Penyewa</th>
                        <th scope="col">Harga Total</th>
                        <th scope="col">Tanggal Booking</th>
                        <th scope="col">Metode pembayaran</th>
                        <th scope="col">Dibuat Tanggal</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Bukti pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment as $index => $pm)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pm->user->name }}</td>
                            <td>{{ $pm->order->vehicle_package->price }}</td>
                            <td>{{ $pm->order->rental_date }}</td>
                            <td>{{ $pm->payment_method }}</td>
                            <td>{{ $pm->created_at }}</td>
                            <td>{{ $pm->payment_approved }}</td>
                            <td><img src="{{ $pm->proof_of_transaction }}" style="width: 100px;"></td>
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
