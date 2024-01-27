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
        Schema::create('invoice_guests', function (Blueprint $table) {
            $table->id('invoice_guest_id');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('reservation_id');
            $table->float('invoice_amount');
            $table->dateTime('ts_issued');
            $table->dateTime('ts_paid')->nullable();
            $table->dateTime('ts_canceled')->nullable();

            // Foreign key constraints
            $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('cascade');
            $table->foreign('reservation_id')->references('reservation_id')->on('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_guests');
    }
};
