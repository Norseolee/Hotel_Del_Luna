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
        Schema::create('room_types', function (Blueprint $table) {
            $table->id('room_type_id');
            $table->integer('max_capacity');
            $table->float('price');
            $table->text('description')->nullable();
            $table->string('view');
            $table->text('bath_amenities');
            $table->string('sqm');
            $table->string('layout');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_types');
    }
};
