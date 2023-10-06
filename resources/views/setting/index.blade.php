<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>DATA SETTING</title>
  </head>
  <body style="background-color :rgb(243, 201, 111);">
    <x-app-layout>
        <div class="container-fluid">
            <div class="card">
                <h1 class="text-center fs-2 mt-4">DATA SETTING</h1>
                <div class="card-body">
                        <form action="" method="GET">
                        </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-center">
                            <thead>
                                <tr class="table-border" style="background-color : rgb(236, 128, 4); color:black;">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">History</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">About Me</th>
                                    <th scope="col">Slogan</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($settings))
                                    @foreach ($settings as $index => $sett)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $sett->name }}</td>
                                            <td>{{ $sett->history }}</td>
                                            <td><img src="{{ asset($sett->image) }}" width="100"></td>
                                            <td><img src="{{ asset($sett->images) }}" width="100"></td>
                                            <td>{{ $sett->location }}</td>
                                            <td>{{ $sett->no_telp }}</td>
                                            <td>{{ $sett->email }}</td>
                                            <td>{{ $sett->about_me }}</td>
                                            <td>{{ $sett->slogan }}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('setting.destroy', $sett->id) }}" method="POST">
                                                  @csrf
                                                  @method('delete')
                                                  <a href="{{ route('setting.edit', $sett->id) }}" class="btn btn-secondary" style="height:40px; color:black;">Edit</a>
                                                  <input name="_method" type="hidden" value="DELETE">
                                                  <button class="btn ml-2 btn-secondary" style="height:40px; color:black;">Delate</button>
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
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
