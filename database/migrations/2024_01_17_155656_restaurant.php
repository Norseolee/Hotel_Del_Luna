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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id('restaurant_id'); 
            $table->string('restaurant_name');
            $table->string('time_open')->nullable();
            $table->string('time_close')->nullable();
            $table->string('restaurant_type')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('description');
            $table->string('location')->nullable();
            $table->string('picture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
