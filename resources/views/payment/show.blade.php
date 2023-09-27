@extends('components.main')
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
</x-app-layout>
