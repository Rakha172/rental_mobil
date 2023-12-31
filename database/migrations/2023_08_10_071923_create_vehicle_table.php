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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('vehicle_type');
            $table->string('brand');
            $table->string('color');
            $table->string('passenger_capacity');
            $table->enum('status_pesanan', ['tersedia', 'dipesan'])->default('tersedia');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
