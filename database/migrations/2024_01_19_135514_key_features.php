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
        Schema::create("key_features", function (Blueprint $table) {
            $table->bigIncrements("key_feature_id");
            $table->unsignedBigInteger("room_type_id");
            $table->string('key_feature_picture', 400);
            $table->string('key_feature_description', 255);
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
