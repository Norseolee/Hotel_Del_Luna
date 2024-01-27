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
        Schema::create('restaurant_gallaries', function (Blueprint $table) {
            $table->id('restaurant_gallaries_id');
            $table->unsignedBigInteger('restaurant_id');
            $table->string('picture');

            // Foreign key constraint
            $table->foreign('restaurant_id')->references('restaurant_id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_gallaries');
    }
};
