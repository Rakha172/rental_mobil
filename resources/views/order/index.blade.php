@extends('components.mainadmin_')
<x-app-layout>
    <div class="container-fluid">
        <h1 class="text-center">DATA ORDER</h1>
        <div class="card">
            <div class="card-body">
                    <form action="" method="GET">
                        <div class="row mb-2">
                            <div class="col-sm-10 d-flex">
                                <input type="text" placeholder="Please input key for search data" name="search" autofocus style="border-radius:5px; width:700px; margin-bottom:1rem;" value="{{ $search }}">
                                <button class="btn ml-2 btn-light" style="height:42px; color:black;">Search</button>
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
                                        <td>
                                            <form action="{{ route('order.destroy', $ordr->id) }}"method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('order.edit', $ordr->id) }}"><ion-icon name="create-outline"></ion-icon></a>
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
