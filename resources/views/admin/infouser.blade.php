<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylevehicle.css">

    <title>Rental Mobil</title>
  </head>
  <body style="background-color :rgb(243, 201, 111);">
    <x-app-layout>
        <div class="container-fluid">
            <div class="card">
                <h1 class="text-center fs-2 mt-4">DATA USER</h1>
                <div class="card-body">
                        <form action="" method="GET">
                            <div class="row mb-2">
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Please input key for search data" name="search"
                                        autofocus style="border-radius:5px; width:80%;" value="{{ $search }}">
                                    <button class="btn btn-light" style="height:42px;">Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-center">
                                <thead>
                                    <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
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
                                        $nomor = 1 + ($user->currentPage() - 1) * $user->perPage();
                                    @endphp
                                    @if ($user->count() > 0)
                                        @foreach ($user as $no => $usr)
                                            <tr>
                                                <th>{{ $nomor++ }}</th>
                                                <td>{{ $usr->name }}</td>
                                                <td>{{ $usr->phone_number }}</td>
                                                <td>{{ $usr->address }}</td>
                                                <td><img src="{{ asset($usr->id_card_photo) }}" width="100"
                                                        class="rounded mx-auto d-block"></td>
                                                <td><img src="{{ asset($usr->driver_licence_photo) }}" width="100"
                                                        class="rounded mx-auto d-block"> </td>
                                                <td>{{ $usr->email }}</td>
                                                <td style="width: 150px;">
                                                    @if ($usr->role != 'admin')
                                                        <form class="" action="{{ route('register.destroy', $usr->id) }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="button" class="btn btn-light" style="font-size: 10px;"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                                name="{{ $usr->name }}"
                                                                phone_number="{{ $usr->phone_number }}"
                                                                address="{{ $usr->address }}">Show Account</button>
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit"
                                                                class="btn btn-light"
                                                                data-toggle="tooltip" title='Delete'>Delate</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{-- {{ $user->links()}} --}}
                        {!! $user->appends(Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
    </x-app-layout>

    <div class="modal fade p-10" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-name">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $usr->name }}">
                    </div>
                </div>
                <div class="modal-phone_number">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Phone Number</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $usr->phone_number }}">
                    </div>
                </div>
                <div class="modal-address">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Address</label>
                        <input type="text" class="form-control" id="recipient-name" value="{{ $usr->address }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget

            const name = button.getAttribute('name')
            const phone_number = button.getAttribute('phone_number')
            const address = button.getAttribute('address')

            const modalTitle = exampleModal.querySelector('.modal-title')
            const modalNameInput = exampleModal.querySelector('.modal-name input')
            const modalPhone_numberInput = exampleModal.querySelector('.modal-phone_number input')
            const modalAddressInput = exampleModal.querySelector('.modal-address input')

            modalTitle.textContent = `Detail ${name}`
            modalNameInput.value = name
            modalPhone_numberInput.value = phone_number
            modalAddressInput.value = address

        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
