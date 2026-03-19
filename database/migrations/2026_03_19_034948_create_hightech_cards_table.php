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
        Schema::create('hightech_cards', function (Blueprint $table) {
            $table->id();
             $table->foreignId('industry_id')->constrained('hightech_industries')->onDelete('cascade');

    $table->string('card_img')->nullable();
    $table->string('card_title')->nullable();
    $table->string('card_subtitle')->nullable();
    $table->text('card_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hightech_cards');
    }
};
