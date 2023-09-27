<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('order_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreignId('order_detail_id')->nullable();
            $table->foreign('order_detail_id')->references('id')->on('order_detail')->nullable();
            $table->enum('payment_method', ['cash','gopay','dana']);
            $table->string('proof_of_transaction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
