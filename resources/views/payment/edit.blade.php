<x-app-layout>
    <div class="container-fluid">
        <h1 class="text-center fs-1">Status Pembayaran</h1>
        {{-- <a href="{{ route('order.index') }}"><ion-icon name="arrow-back-circle-outline"
            class="shadow mb-3 p-3 bg-body rounded" style="font-size: 30px; position: relative; margin-top:-30px;
            color:black"></ion-icon></a> --}}
            <div class="card">
                <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item text-center">
                                Nama Penyewa :
                                {{ $payment->user->name }}
                            </li>
                            <li class="list-group-item text-center">
                                Paket:
                                {{$payment->order->vehicle_package_id}}
                            </li>
                            <li class="list-group-item text-center">
                                Durasi Paket :
                                {{$payment->order->vehicle_package->duration_date}}
                            </li>
                            <li class="list-group-item text-center">
                                Metode Pembayaran :
                                {{ $payment->payment_method }}
                            </li>
                            <li class="list-group-item text-center">
                                Payment Approved :
                                {{$payment->payment_approved}}</li>
                            <li class="list-group-item text-center">
                                Bukti transaksi :
                                {{ $payment->proof_of_transaction }}
                                <div class="imgs" style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ asset($payment->proof_of_transaction) }}" alt="" style="width: 200px">
                                </div>
                            </li>
                        </ul>

                    <form action="{{ route('payment.update', $payment->id)}}" method="POST">
                        @method('put')
                        @csrf
                           <label class="text-center"></label>
                            <select name="payment_approved" class="form-control @error('payment_approved') is-invalid @enderror text-center">
                                <option value="">Payment Approved</option>
                                <option @selected(old('payment_approved') == 'setujui') value="setujui">disetujui</option>
                                <option @selected(old('payment_approved') == 'tolak') value="tolak">tolak</option>
                            </select>
                            @error('payment_approved')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button class="btn btn-dark mt-2">Submit</button>
                        </form>
                </div>
            </div>
    </div>
</x-app-layout>
