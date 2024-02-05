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
        Schema::create('revenue_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('information_company_id');
            $table->string('revenue_lines');
            $table->string('Income');
            $table->string('cost');
            $table->string('cost_per_unit');
            $table->string('units_sold');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenue_lines');
    }
};
