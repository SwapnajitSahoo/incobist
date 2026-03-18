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
        Schema::create('potential_rois', function (Blueprint $table) {
            $table->id();
            $table->string('industry')->nullable();
            $table->string('budget')->nullable();
            $table->string('goal')->nullable();
            $table->string('business_stage')->nullable();
            $table->string('timeline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potential_rois');
    }
};
