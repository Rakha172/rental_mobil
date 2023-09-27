{{-- @extends('components.main')
<x-app-layout>

    <div class="container" style="margin-top: 100px; position: absolute;">
        <a href="{{ route('order.index') }}"><ion-icon name="arrow-back-circle-outline"
            class="shadow mb-3 p-3 bg-body rounded" style="font-size: 30px; position: relative; margin-top:-30px;
            color:black"></ion-icon></a>
    <h1 class="text-center">Status pesanan</h1>
    <h4>Nama Penyewa</4>
    <p>{{$payment->user->name}}</p>
    <h4>Paket</4>
    <p>{{$payment->order->vehicle_package_id}}</p>
    <h4>Durasi hari</4>
    <p>{{$payment->order->vehicle_package->duration_date}}</p>
    <h4>Pembayaran menggunakan</h4>
    <p>{{$payment->payment_method}}</p>
    <h4>Bukti transaksi</h4>
    <p>{{$payment->proof_of_transaction}}</p>
    <img src="{{asset($payment->proof_of_transaction)}}" alt="" style="width: 500px">
    <h1>Approve transaksi</h1>
    <label class="form-label">Payment_approved</label>
    <h1>{{$payment->payment_approved}}</h1>
    <form action="{{route('order_detail.update', $payment->id)}}" method="POST">
        @method('post')
        @csrf
        <label for="payment_approved">ubah kondisi</label>
        <input type="text" name="payment_approved" id="payment_approved">
        @error('payment_approved')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <button class="btn btn-dark">Submit</button>
    </form>
    </div>
</x-app-layout> --}}

<x-app-layout>
    @extends('components.main')
    <div class="container-fluid">
        <h1 class="text-center">Status Pembayaran</h1>
        <a href="{{ route('order.index') }}"><ion-icon name="arrow-back-circle-outline"
            class="shadow mb-3 p-3 bg-body rounded" style="font-size: 30px; position: relative; margin-top:-30px;
            color:black"></ion-icon></a>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('order_detail.store')}}" method="POST">
                        @method('post')
                        @csrf
                        <ul class="list-group list-group-flush">
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
                                Bukti transaksi :
                                {{ $payment->proof_of_transaction }}
                                <div class="imgs" style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ asset($payment->proof_of_transaction) }}" alt="" style="width: 200px">
                                </div>
                            </li>
                            <li class="list-group-item text-center">
                                Order Atas Nama :
                                {{$order->id}}
                            </li>
                    <form action="{{route('order_detail.store')}}" method="POST">
                        @method('post')
                        @csrf
                            <label class="text-center">Orderan atas nama</label>
                            <input class="text-center" type="text" name="order_id" id="order_id" value="{{$order->id}}">
                            <label class="text-center">Payment_approved</label>
                            <select name="payment_approved" class="form-control @error('payment_approved') is-invalid @enderror text-center">
                                <option value="">Pilih</option>
                                <option @selected(old('payment_approved') == 'setujui') value="setujui">disetujui</option>
                                <option @selected(old('payment_approved') == 'tolak') value="tolak">tolak</option>
                            </select>
                            @error('payment_approved')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button class="btn btn-dark">Submit</button>
                    </form>
                </div>

            </div>
    </div>
</x-app-layout>
