    <x-app-layout>
        <div class="container-fluid">
            <div class="card">
                <h1 class="text-center fs-2 mt-4">DATA VEHICLE</h1>
                <div class="card-body">
                        <form action="" method="GET">
                            <div class="col-sm-10 d-flex">
                                <a href="{{ route('vehicle.create') }}" class="btn btn-secondary" style="margin-right: 8px; color:black;">Add</a>
                                <input type="text" placeholder="Please input key for search data" name="search" autofocus style="border-radius:5px; width:700px; margin-bottom:1rem;" value="{{ $search }}">
                                <button class="btn ml-2 btn-secondary" style="height:40px; color:black;">Search</button>
                            </div>
                        </form>
                    <div class="table-responsive">

                        <table class="table table-bordered table-center">
                            <thead>
                                <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
                                    <th scope="col">No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Vehicle Type</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Passenger Capacity</th>
                                    <th scope="col">Status Pesanan</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($vehicle))
                                    @foreach ($vehicle as $index => $vhcle)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td><img src="{{ asset($vhcle->image) }}" width="100"></td>
                                            <td>{{ $vhcle->name }}</td>
                                            <td>{{ $vhcle->vehicle_type }}</td>
                                            <td>{{ $vhcle->brand }}</td>
                                            <td>{{ $vhcle->color }}</td>
                                            <td>{{ $vhcle->passenger_capacity }}</td>
                                            <td>{{ $vhcle->status_pesanan }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('vehicle.destroy', $vhcle->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('vehicle.edit', $vhcle->id) }}" class="btn btn-secondary" style="height: 40px; color: black;">Edit</a>
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn ml-2 btn-secondary" style="height: 40px; color: black;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                        {!! $vehicle->appends(Request::except('page'))->render() !!}
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
