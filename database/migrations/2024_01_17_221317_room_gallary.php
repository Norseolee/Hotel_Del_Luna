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
        Schema::create("room_gallary", function (Blueprint $table) {
            $table->bigIncrements("room_gallary_id");
            $table->unsignedBigInteger("room_type_id");
            $table->string('room_picture', 255);
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
