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
    <p>{{$payment->vehicle_package->package_name}}</p>
    <h4>Durasi hari</4>
    <p>{{$payment->vehicle_package->duration_date}}</p>
    <h4>Pembayaran menggunakan</h4>
    <p>{{$payment->payment_method}}</p>
    <h4>Bukti transaksi</h4>
    <p>{{$payment->proof_of_transaction}}</p>
    <img src="{{asset($payment->proof_of_transaction)}}" alt="" style="width: 500px">
    </div>
</x-app-layout>