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
        Schema::create('banking_services', function (Blueprint $table) {
            $table->id();
              $table->foreignId('industry_id')->constrained('banking_industries')->onDelete('cascade');

    $table->string('service_card_img')->nullable();
    $table->string('service_card_title')->nullable();
    $table->text('service_card_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banking_services');
    }
};
