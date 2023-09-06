<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Order Detail</title>
  </head>
  <body>

    <div class="container mt-5">
        <form action="{{ route("order_detail.update", $order_detail->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">Order</label>
                <select name="order_id" class="form-control @error('order_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($order as $order)
                    <option @if(old('order_id') == $order->id) selected @endif value="{{ $order->id }}">{{ $order->date }}</option>
                    @endforeach
                </select>
                @error('order_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label class="form-label">Return Date</label>
                <select name="order_id" class="form-control @error('order_id') is-invalid @enderror">
                    <option value="">Pilih</option>
                    @foreach ($order as $orderItem)
                        <option {{ old('order_id', $order_detail->order_id) == $orderItem->id ? 'selected' : '' }} value="{{ $orderItem->id }}">{{ $orderItem->return_date }}</option>
                    @endforeach
                </select>
                @error('order_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}
                  <div class="mb-3">
                    <label class="form-label">Vehicle Status</label>
                    <select name="vehicle_status" class="form-control @error('vehicle_status') is-invalid @enderror">
                        <option value="">Pilih</option>
                        <option @selected(old('vehicle_status', $order_detail->vehicle_status) == 'Disewakan') value="Disewa">Disewa</option>
                        <option @selected(old('vehicle_status', $order_detail->vehicle_status) == 'Dibatalkan') value="Dibatalkan">Dibatalkan</option>
                        <option @selected(old('vehicle_status', $order_detail->vehicle_status) == 'Dikembalikan') value="Dikembalikan">Dikembalikan</option>
                    </select>
                    @error('vehicle_status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

