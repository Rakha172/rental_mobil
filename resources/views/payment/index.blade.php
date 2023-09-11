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

        <a href="{{ route('payment.create')}}" class="btn btn-primary">Tambah</a>

        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Total Price</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Proof Of Transaction</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payment as $index => $pm)
              <tr>
                <th scope="row">{{ $index}}</th>
                <td>{{ $pm->total_price }}</td>
                <td>{{ $pm->payment_method }}</td>
                <td><img src="{{ asset($pm->proof_of_transaction)}}" width="100"></td>
                <td>
                    <a href="{{ route('payment.edit', $pm->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('payment.destroy', $pm->id)}}"method="POST">
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
        <div style="text-align: center;">
            <a href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm">Log Out</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
