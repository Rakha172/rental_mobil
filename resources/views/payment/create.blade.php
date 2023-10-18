@extends('components.main')
<x-app-layout>
    <div class="container " style="margin-top: 100px;">
        <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class=" shadow p-3 mb-5 bg-body rounded " id="box">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="user_id" value="{{ $user->first()->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <select name="order_id" class="form-control">
                        @foreach ($order as $ord)
                            <option value="{{ $ord->id }}">
                                {{ $ord->vehicle_package->price }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">payment Method</label>
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
                <div class="mb-3">
                    <label for="proof_of_transaction" class="form-label">Proof Of Transaction</label>
                    <input type="file" name="proof_of_transaction"
                        class="form-control @error('proof_of_transaction') is-invalid @enderror">
                    @error('proof_of_transaction')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</x-app-layout>
