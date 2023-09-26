@extends('components.main')
<x-app-layout>
        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
        
        <div class="container" style="margin-top: 150px; position: absolute; margin-left:100px;">
          <h1 class="text-center">Histori transaksi anda</h1> 
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Harga Total</th>
                <th scope="col">Tanggal Booking</th>
                <th scope="col">Metode pembayaran</th>
                <th scope="col">Dibuat Tanggal</th>
                <th scope="col">Bukti pembayaran</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payment as $index => $pm)
              <tr>
                <th scope="row">{{ $index+1}}</th>
                <td>{{ $pm->user->name }}</td>
                <td>{{ $pm->order->vehicle_package->price }}</td>
                <td>{{ $pm->order->rental_date }}</td>
                <td>{{ $pm->payment_method }}</td>
                <td>{{ $pm->created_at }}</td>
                <td><img src="{{ $pm->proof_of_transaction }}" style="width: 100px;"></td>
                </td>
                <td>
                  {{-- @if ($pm->user_id == 0 )
                      <button class="btn btn-dark">Sudah dibayar</button>
                  @else
                  <form action="{{ route('payment.create', $pm->id)}}">
                    <button class="btn btn-dark">Bayar</button>
                  </form> --}}
                  {{-- @endif --}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
    </div>
    
            {{-- <a href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm">Log Out</a> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</x-app-layout>   



