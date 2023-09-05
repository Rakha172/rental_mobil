@extends('components.main')
<x-app-layout>
    <div class="container mt-5">
        <div class="card">
            <h3 class="text-center mt-5">DATA USER</h3>
            <div class="card-body">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <form action="" method="GET">
                        <div class="row mb-2">
                            <label for="search" class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="Please input key for search data" name="search" autofocus class="form-control" value="{{ $search }}">
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Id Card Photo</th>
                                <th scope="col">Driver Licence Photo</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $nomor = 1 + (($user->currentPage() - 1 ) * $user->perPage());
                            @endphp
                            @if ($user->count() > 0)
                                @foreach ($user as $no => $usr)
                                    <tr>
                                        <th>{{ $nomor++ }}</th>
                                        <td>{{ $usr->name }}</td>
                                        <td>{{ $usr->phone_number }}</td>
                                        <td>{{ $usr->address }}</td>
                                        <td><img src="{{ asset($usr->id_card_photo) }}" width="100"
                                                class="rounded mx-auto d-block"> </td>
                                        <td><img src="{{ asset($usr->driver_licence_photo) }}" width="100"
                                                class="rounded mx-auto d-block"> </td>
                                        <td>{{ $usr->email }}</td>
                                        <td>
                                            <form  class="p-2" action="{{ route('register.destroy', $usr->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><ion-icon name="trash-outline" style="font-size: 20px"></ion-icon></button>
                                            </form>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{-- {{ $user->links()}} --}}
                     {!! $user->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </div>
</x-app-layout>
