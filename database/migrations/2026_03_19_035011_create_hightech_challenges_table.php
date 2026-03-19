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
        Schema::create('hightech_challenges', function (Blueprint $table) {
            $table->id();
              $table->foreignId('industry_id')->constrained('hightech_industries')->onDelete('cascade');

    $table->text('challenge_text')->nullable();

    $table->string('challenge_card')->nullable();
    $table->string('challenge_card_title')->nullable();
    $table->string('challenge_card_subtitle')->nullable();
    $table->text('challenge_card_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hightech_challenges');
    }
};
