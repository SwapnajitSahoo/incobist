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
        Schema::table('job_applications', function (Blueprint $table) {
            $table->string('first_name')->after('career_id');
            $table->string('last_name')->after('first_name');
            $table->string('education')->after('email');
            $table->string('experience')->after('education');
            $table->string('state')->after('phone');
            $table->string('district')->after('state');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'education', 'experience', 'state', 'district']);
        });
    }
};
