
    <x-app-layout>
        <div class="container-fluid">
            <div class="card">
                <h1 class="text-center fs-2 mt-4">DATA ORDER {{$ordercount}}</h1>
                <div class="card-body">
                        <form action="" method="GET">
                            <div class="row mb-2">
                                <div class="col-sm-10 d-flex">
                                    <input type="text" placeholder="Please input key for search data" name="search" autofocus style="border-radius:5px; width:700px; margin-bottom:1rem;" value="{{ $search }}">
                                    <button class="btn ml-2 btn-secondary" style="height:42px; color:black;">Search</button>
                                </div>
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
                                                    <a href="{{ route('payment.edit', $ordr->id)}}" class="btn ml-2 btn-secondary" style="height:40px; color:black;">Payment</a>
                                                    @endif
                                                    <button class="btn ml-2 btn-secondary" style="height:40px; color:black;">Delate</button>
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

