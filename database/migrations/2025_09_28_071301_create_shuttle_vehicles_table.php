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
        Schema::create('shuttle_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shuttle_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            $table->float('start_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shuttle_vehicles');
    }
};
