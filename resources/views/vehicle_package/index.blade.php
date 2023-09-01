<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>vehicle package</title>
  </head>
  <body>

    <div class="container mt-5">

        <a href="{{ route('vehicle_package.create')}}" class="btn btn-primary">Tambah</a>

        @if ($pesan = session('berhasil'))
        <div class="alert alert-primary" role="alert">
           {{ $pesan }}
        </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Image</th>
                <th scope="col">Package Name</th>
                <th scope="col">Description</th>
                <th scope="col">Duration Date</th>
                <th scope="col">Price</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($vehicle_packages as $index => $vhcpck)
              <tr>
                <th scope="row">{{ $index}}</th>
                <td><img src="{{ asset($vhcpck->vehicle->image)}}" width="100"></td>
                <td>{{ $vhcpck->package_name }}</td>
                <td>{{ $vhcpck->description }}</td>
                <td>{{ $vhcpck->duration_date }}</td>
                <td>{{ $vhcpck->price }}</td>
                <td>
                    <a href="{{ route('vehicle_package.edit', $vhcpck->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('vehicle_package.destroy', $vhcpck->id)}}"method="POST">
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
