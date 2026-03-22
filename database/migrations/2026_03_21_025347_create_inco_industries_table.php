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
        Schema::create('inco_industries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nav_menu_id')->constrained('navbar_menus'); // no onDelete
            $table->string('type')->nullable();
            $table->string('page_title')->nullable();
            $table->string('page_img')->nullable();
            $table->string('heading')->nullable();
            $table->string('heading_subtitle')->nullable();
            $table->string('lending_title')->nullable();
            $table->longText('lending_desc')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('wp_link')->nullable();
            $table->string('tel_no')->nullable();
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
        Schema::dropIfExists('inco_industries');
    }
};
