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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->dateTime('Check-In');
            $table->dateTime('Check-Out');
            $table->dateTime('ts_created');
            $table->dateTime('ts_updated')->nullable();
            $table->float('discount_percent')->nullable();
            $table->float('total_price')->nullable();
            $table->unsignedBigInteger('guest_id');

            // Foreign key constraint
            $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
