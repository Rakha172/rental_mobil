{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Payment</title>
  </head>
  <body>
    <div class="container mt-5">
        <form action="{{ route("buku.update", $buku->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Judul Buku</label>
              <input value="{{ old('judul_buku', $buku->judul_buku) }}" name="judul_buku" type="text" class="form-control @error('judul_buku') is-invalid @enderror">
                @error('judul_buku')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Kategori Buku</label>
                <select name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror">
                    <option value="">Pilih</option>
                    <option @selected(old('nama_kategori', $buku->nama_kategori) == 'Komik') value="Komik">Komik</option>
                    <option @selected(old('nama_kategori', $buku->nama_kategori) == 'Novel') value="Novel">Novel</option>
                    <option @selected(old('nama_kategori', $buku->nama_kategori) == 'Cerpen') value="Cerpen">Cerpen</option>
                </select>
                @error('nama_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Pengarang</label>
                <select name="pengarang_id" class="form-control @error('pengarang_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($pengarangs as $pengarang)
                        <option @selected(old('pengarang', $buku->pengarang_id) == $pengarang->id) value={{ $pengarang->id }}>{{ $pengarang->nama_pengarang }}</option>
                    @endforeach
                </select>
                @error('pengarang_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label">Kode Buku</label>
               <textarea name="kode_buku" type="number" class="form-control @error('kode_buku') is-invalid @enderror">{{ old('kode_buku', $buku->kode_buku) }}</textarea>
               @error('kode_buku')
                   <div class="invalid-feedback">{{ $message }}</div>
               @enderror

              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
 --}}
