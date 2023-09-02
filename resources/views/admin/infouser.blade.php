@extends('components.main')
<x-app-layout>
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
                                        <td>
                                            <x-danger-button x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete') }}</x-danger-button>
                                                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                            <form  class="p-6" action="{{ route('register.destroy', $usr->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <h2 class="text-lg font-medium text-gray-900 text-center">
                                                    {{ __('Are you sure you want to delete this account?') }}
                                                </h2>
                                                <div class="mt-6 flex justify-center">
                                                    <x-secondary-button x-on:click="$dispatch('close')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>
                                                    <x-danger-button class="ml-3">
                                                        {{ __('Delete Account') }}
                                                    </x-danger-button>
                                                </div>
                                            </form>
                                            </x-modal>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
