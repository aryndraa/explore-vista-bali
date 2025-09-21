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
        Schema::create('shuttle_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shuttle_id')->constrained('shuttles')->onDelete('cascade');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->date('booking_date');
            $table->time('pickup_time');
            $table->integer('people_amount');
            $table->string('from');
            $table->string('to');
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null');
            $table->string('status')->nullable()->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shuttle_bookings');
    }
};
