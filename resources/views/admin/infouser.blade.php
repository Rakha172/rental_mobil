@extends('components.main')
@include('layouts.navbar')
<div class="container mt-5">
    <div class="card">
        <h3 class="text-center mt-5">DATA USER</h3>
        <div class="card-body">
            <div class="shadow p-3 mb-5 bg-body rounded">
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
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($user->count() > 0)
                            @foreach ($user as $no => $usr)
                                <tr>
                                    <th scope="col">{{ $no + 1 }}</th>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->phone_number }}</td>
                                    <td>{{ $usr->address }}</td>
                                    <td><img src="{{ asset($usr->id_card_photo) }}" width="100"
                                            class="rounded mx-auto d-block"> </td>
                                    <td><img src="{{ asset($usr->driver_licence_photo) }}" width="100"
                                            class="rounded mx-auto d-block"> </td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->password }}</td>
                                    <td>
                                        <form action="{{ route('register.destroy', $usr->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><ion-icon name="trash" style="font-size: 20px"></ion-icon></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>



