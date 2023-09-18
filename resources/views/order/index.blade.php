@extends('components.main')
<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h3 class="text-center">DATA ORDER</h3>
                    <form action="" method="GET">
                        <div class="row mb-2">
                            <label for="search" class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Please input key for search data" name="search"
                                    autofocus style="border-radius:5px; width:80%;"  value="{{ $search }}">
                                <button class="btn btn-dark" style="height:42px;">Search</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
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
                    {!! $order->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
