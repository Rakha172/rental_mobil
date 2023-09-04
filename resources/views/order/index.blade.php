<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Order</title>
  </head>
  <body>

    <div class="container mt-5">

        <a href="{{ route('order.create')}}" class="btn btn-primary">Tambah</a>

        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Name</th>
                <th scope="col">Package Name</th>
                <th scope="col">Rental Date</th>
                <th scope="col">Return Date</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order as $index => $ordr)
              <tr>
                <th scope="row">{{ $index}}</th>
                <td>{{ $ordr->users ? $ordr->users->name : 'Name Not Found' }}</td>
                <td>{{ $ordr->vehicle_package ? $ordr->vehicle_package->package_name : 'Package Name Not Found' }}</td>
                <td>{{ $ordr->rental_date }}</td>
                <td>{{ $ordr->return_date }}</td>
                <td>
                    <a href="{{ route('order.edit', $ordr->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('order.destroy', $ordr->id)}}"method="POST">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
