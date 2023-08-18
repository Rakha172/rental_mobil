<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_nik');
            $table->foreign('user_nik')->references('id')->on('profiles');
            $table->foreignId('mobile');
            $table->foreign('mobile')->references('id')->on('items');
            $table->date('rental_date');
            $table->date('return_date');
            $table->integer('total_days');
            $table->string('total_price');
            $table->string('payment_transaction');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('renters');
    }
};
