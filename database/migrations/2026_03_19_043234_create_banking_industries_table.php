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
        Schema::create('banking_industries', function (Blueprint $table) {
            $table->id();
              $table->string('page_title')->nullable();
    $table->string('heading')->nullable();
    $table->string('heading_subtitle')->nullable();
    $table->string('lending_title')->nullable();
    $table->text('lending_desc')->nullable();

    $table->string('slug')->unique();
    $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banking_industries');
    }
};
