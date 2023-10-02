
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylevehicle.css">

    <title>Rental Mobil</title>
  </head>
  <body style="background-color :rgb(243, 201, 111);">
    <x-app-layout>
        <div class="container-fluid">
            <div class="card">
                <h1 class="text-center fs-2 mt-4">DATA PACKAGE</h1>
                    <div class="card-body">
                        <form action="" method="GET">
                                <div class="col-sm-10 d-flex">
                                    <a href="{{ route('vehicle_package.create') }}" class="btn btn-light" style="margin-right: 8px;">Add</a>
                                    <input type="text" placeholder="Please input key for search data" name="search" autofocus style="border-radius:5px; width:700px; margin-bottom:1rem;" value="{{ $search }}">
                                    <button class="btn ml-2 btn-light" style="height:42px; color:black;">Search</button>
                                </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-center">
                                <thead>
                                    <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
                                        <th scope="col">NO</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Package Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Duration Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nomor = 1 + ($vehicle_packages->currentPage() - 1) * $vehicle_packages->perPage();
                                    @endphp
                                    @foreach ($vehicle_packages as $index => $vhcpck)
                                    <tr>
                                        <th scope="row">{{ $nomor++ }}</th>
                                        <td><img src="{{ asset($vhcpck->vehicle->image) }}" width="100"></td>
                                        <td class="package-name">{{ $vhcpck->package_name }}</td>
                                        <td class="description-column">{{ $vhcpck->description }}</td>
                                        <td class="duration-date">{{ $vhcpck->duration_date }}</td>
                                        <td>{{ $vhcpck->price }}</td>
                                        <td class="d-flex">
                                            <form action="{{ route('vehicle_package.destroy', $vhcpck->id) }}" method="POST">
                                              @csrf
                                              @method('delete')
                                              <a href="{{ route('vehicle_package.edit', $vhcpck->id) }}" class="btn btn-light" >Edit</a>
                                              <input name="_method" type="hidden" value="DELETE">
                                              <button class="btn ml-2 btn-light" style="height:40px; color:black;">Delate</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- {{ $user->links()}} --}}
                        {!! $vehicle_packages->appends(Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
