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
        Schema::create("amenities", function (Blueprint $table) {
            $table->bigIncrements("amenities_id");
            $table->unsignedBigInteger('room_type_id');
            $table->string('amenities_type', 100);
            $table->string('amenities_list',200);
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
