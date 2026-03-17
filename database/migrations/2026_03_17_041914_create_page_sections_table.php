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
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
             $table->foreignId('page_id')->constrained('page_contents')->onDelete('cascade');
            $table->enum('type', [
                'hero',
                'text_block',
                'challenge_solution',
                'card_grid',
                'testimonial',
                'cta_banner',
                'faq',
                'custom_html',
            ]);
            $table->json('content');           // flexible per section type
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_sections');
    }
};
