<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HALO</title>
  </head>
  <body>

    <div class="container mt-5">

        {{-- <a href="{{ route('payment.create')}}" class="btn btn-primary">Tambah</a> --}}

        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Harga Total</th>
                <th scope="col">Tanggal Booking</th>
                <th scope="col">Dibuat Tanggal</th>
                <th scope="col">Status</th>
                <th scope="col">Bayar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order as $index => $pm)
              <tr>
                <th scope="row">{{ $index+1}}</th>
                <td>{{ $pm->user->name }}</td>
                <td>{{ $pm->vehicle_package->price  }}</td>
                <td>{{ $pm->rental_date}}</td>
                <td>{{ $pm->created_at}}
                <td>Belum Dibayar<td>
                </td>
                <td>
                  <form action="{{ route('payment.create', $pm->id)}}">
                    <button class="btn btn-dark">Bayar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <td colspan="n">
        <div style="text-align: center;">
            {{-- <a href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm">Log Out</a> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
