<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nik_user');
            $table->foreign('nik_user')->references('id')->on('user');
            $table->foreignId('plat_mobil');
            $table->foreign('plat_mobil')->references('id')->on('barang');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->integer('total_hari');
            $table->string('total_harga');
            $table->string('transaksi_pembayaran');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penyewa');
    }
};
