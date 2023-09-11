<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Payment</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route("payment.store") }}" method="post">
            @csrf
            @method('post')
             <div class="form-group">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ auth()->user()->name }}" readonly>
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
            <div class="mb-3">
              <label class="form-label">Total Price</label>
              <input value="{{ old('total_price')}}" name="total_price" type="text" class="form-control @error('total_price') is-invalid @enderror">
                @error('total_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select name="payment_method" class="form-control @error('payment_method') is-invalid @enderror">
                    <option value="">Pilih</option>
                    <option @selected(old('payment_method') == 'Cash') value="Cash">Cash</option>
                    <option @selected(old('payment_method') == 'Gopay') value="Gopay">Gopay</option>
                    <option @selected(old('payment_method') == 'Dana') value="Dana">Dana</option>
                </select>
                @error('payment_method')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input style="background-color: rgb(167, 166, 166)" type="file" name="proof_of_transaction"
                    @error('proof_of_transaction') is-invalid @enderror id="proof_of_transaction"
                    value="{{ old('proof_of_transaction') }}" accept="proof_of_transaction/*"
                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                @error('proof_of_transaction')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="mt-3"><img src="{{ old('proof_of_transaction') ? asset(old('proof_of_transaction')) : '' }}" id="output" height="70"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

