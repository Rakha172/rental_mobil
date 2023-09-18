<x-app-layout>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/stylevehiclecreate.css">
        <title>ADD Setting</title>
    </head>

    <body>

        <div class="container-fluid ">
            <h1>Add Setting</h1>
                <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating">
                        <input type="text" style="background-color: rgb(167, 166, 166)" name="name"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                            value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" style="background-color: rgb(167, 166, 166)" name="history"
                            class="form-control @error('history') is-invalid @enderror" placeholder="History"
                            value="{{ old('history') }}">
                        <label for="history">History</label>
                        @error('history')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input style="background-color: rgb(167, 166, 166)" type="file" name="image"
                            @error('image') is-invalid @enderror id="image"
                            value="{{ old('image') }}" accept="image/*"
                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <center>
                            <div class="mt-3"><img src="{{ old('image') ? asset(old('image')) : '' }}" id="output"
                                style="width: 400px;"></div>
                        </center>
                    </div>
                    <div class="form-floating">
                        <input type="text" style="background-color: rgb(167, 166, 166)" name="visi_misi"
                            class="form-control @error('visi_misi') is-invalid @enderror" placeholder="Visi Misi"
                            value="{{ old('visi_misi') }}">
                        <label for="visi_misi">Visi Misi</label>
                        @error('visi_misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="btn">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
    </body>
    </html>
    </x-app-layout>
