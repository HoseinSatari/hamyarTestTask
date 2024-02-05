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
        Schema::create('questions_medcoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_medcom_id');
            $table->foreign('category_medcom_id')->on('category_medcoms')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->string('question');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions_medcoms');
    }
};
