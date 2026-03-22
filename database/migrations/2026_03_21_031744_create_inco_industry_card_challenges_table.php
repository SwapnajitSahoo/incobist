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
        Schema::create('inco_industry_card_challenges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('industry_id')->constrained('inco_industries');
            $table->string('solution_name')->nullable();
            $table->string('img')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('desc')->nullable();
           $table->tinyInteger('is_active')->default(1);
           $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inco_industry_card_challenges');
    }
};
