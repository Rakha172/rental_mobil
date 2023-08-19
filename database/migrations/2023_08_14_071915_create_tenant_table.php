<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreignId('vehiclepackage_id');
            $table->foreign('vehiclepackage_id')->references('id')->on('vehiclepackages');
            $table->date('rental_date');
            $table->date('return_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenant');
    }
};
