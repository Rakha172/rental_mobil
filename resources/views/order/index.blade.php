@extends('components.mainadmin_')
<x-app-layout>
    <div class="container-fluid">
        <h1 class="text-center">DATA ORDER {{$ordercount}}</h1>
        <div class="card">
            <div class="card-body">
                    <form action="" method="GET">
                        <div class="row mb-2">
                            <div class="col-sm-10 d-flex">
                                <input type="text" placeholder="Please input key for search data" name="search" autofocus style="border-radius:5px; width:700px; margin-bottom:1rem;" value="{{ $search }}">
                                <button class="btn ml-2 btn-light" style="height:42px; color:black;">Search</button>

                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-center">
                                <thead>
                                    <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
                                        <th scope="col">NO</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Package Name</th>
                                        <th scope="col">Rental Date</th>
                                        <th scope="col">Tanggal Dipesan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $nomor = 1 + ($order->currentPage() - 1) * $order->perPage();
                                    @endphp
                                    @foreach ($order as $index => $ordr)
                                        <tr>
                                            <th scope="row">{{ $nomor++ }}</th>
                                            <td>{{ $ordr->user?->name }}</td>
                                            <td>{{ $ordr->vehicle_package?->package_name }}</td>
                                            <td>{{ $ordr->rental_date }}</td>
                                            <td>{{ $ordr->created_at }}</td>
                                            <td>
                                                <form action="{{ route('order.destroy', $ordr->id) }}"method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    @if ($payment->count()>0)
                                                    <a href="{{ route('payment.edit', $ordr->id)}}">Payment</a>
                                                    @endif
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $order->appends(Request::except('page'))->render() !!}
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

