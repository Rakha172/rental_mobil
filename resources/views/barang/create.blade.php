<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TAMBAH BARANG</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route("barang.store") }}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
              <label class="form-label">Mobil</label>
              <input value="{{ old('plat_mobil')}}" name="plat_mobil" type="text" class="form-control @error('plat_mobil') is-invalid @enderror">
                @error('plat_mobil')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Mobil</label>
                <input value="{{ old('jenis_kendaraan')}}" name="jenis_kendaraan" type="text" class="form-control @error('jenis_kendaraan') is-invalid @enderror">
                  @error('jenis_kendaraan')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Merek Mobil</label>
                <input value="{{ old('merek')}}" name="merek" type="text" class="form-control @error('merek') is-invalid @enderror">
                  @error('merek')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Model Mobil</label>
                <input value="{{ old('model')}}" name="model" type="text" class="form-control @error('model') is-invalid @enderror">
                  @error('model')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Warna Mobil</label>
                <input value="{{ old('warna')}}" name="warna" type="text" class="form-control @error('warna') is-invalid @enderror">
                  @error('warna')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Kapasitas Penumpang</label>
                <input value="{{ old('kapasitas_penumpang')}}" name="kapasitas_penumpang" type="text" class="form-control @error('kapasitas_penumpang') is-invalid @enderror">
                  @error('kapasitas_penumpang')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Harga Sewa</label>
                <input value="{{ old('harga_sewa')}}" name="harga_sewa" type="text" class="form-control @error('harga_sewa') is-invalid @enderror">
                  @error('harga_sewa')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

