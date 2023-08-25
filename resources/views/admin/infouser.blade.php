@extends('components.main')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Id Card Photo</th>
                <th scope="col">Driver Licence Photo</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
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
                        <td><img src="{{ asset($usr->id_card_photo)}}" width="100" alt=""></td>
                        <td><img src="{{ asset($usr->driver_licence_photo)}}" width="100" alt=""></td>
                        <td>{{ $usr->email }}</td>
                        <td>{{ $usr->password }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
