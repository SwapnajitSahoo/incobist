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
    { Schema::disableForeignKeyConstraints();

    // Healthcare (keep industries)
    Schema::dropIfExists('healthcare_cards');
    Schema::dropIfExists('healthcare_challenges');
    Schema::dropIfExists('healthcare_services');

    // Hightech (keep industries)
    Schema::dropIfExists('hightech_cards');
    Schema::dropIfExists('hightech_challenges');
    Schema::dropIfExists('hightech_services');

    // Banking (keep industries)
    Schema::dropIfExists('banking_cards');
    Schema::dropIfExists('banking_challenges');
    Schema::dropIfExists('banking_services');

    Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
