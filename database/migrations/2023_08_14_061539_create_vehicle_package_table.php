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
        Schema::create('vehicle_package', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicle');
            $table->string('package_name');
            $table->string('description');
            $table->string('duration_date');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_package');
    }
};
