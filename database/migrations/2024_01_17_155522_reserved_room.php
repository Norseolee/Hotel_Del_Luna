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
        Schema::create('reserved_rooms', function (Blueprint $table) {
            $table->id('reserved_room_id'); 
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('reservation_id');

            // Foreign key constraints
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade');
            $table->foreign('guest_id')->references('guest_id')->on('guests')->onDelete('cascade');
            $table->foreign('reservation_id')->references('reservation_id')->on('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
