@extends('components.mainadmin')
<x-app-layout>
    <div class="container-fluid">
        <h1 class="text-center">DATA SETTING</h1>
        <div class="card">
            <div class="card-body">
                    <form action="" method="GET">
                    </form>
                    <a href="{{ route('setting.create') }}" class="btn btn-dark mb-2"
                        style="width:50px;
                    padding:10px; height:40px;"><ion-icon
                            name="add-circle-outline" style="font-size: 20px;"></ ion-icon></a>
                            <div class="table-responsive">
                                <table class="table table-bordered">
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
                                                    <td class="d-flex" style="width: 100px;">
                                                        <form action="{{ route('setting.destroy', $sett->id) }}"method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="{{ route('setting.edit', $sett->id) }}"><ion-icon
                                                                    name="create-outline"
                                                                    style="font-size: 20px; position: absolute;color:black; "
                                                                    class="shadow p-3 mb-5 bg-body rounded "></ion-icon></a>
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit"
                                                                class="btn btn-xs btn-flat show-alert-delete-box btn-sm  "
                                                                data-toggle="tooltip" title='Delete'><ion-icon name="trash-outline"
                                                                    style="font-size: 20px; position: absolute; margin-left:50px; margin-top:-13px"
                                                                    class="shadow p-3 mb-5 bg-body rounded "></ion-icon></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                    {{-- {!! $settings->appends(Request::except('page'))->render() !!} --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

