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
        Schema::create('answer_questions_medcoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('requests_diagnose_medium_medcom_id');
            $table->foreign('requests_diagnose_medium_medcom_id' , 'fk_answer_questions_medcoms')->on('requests_diagnose_medium_medcoms')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('questions_medcom_id');
            $table->foreign('questions_medcom_id')->on('questions_medcoms')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('answer' , [0 , 1,2, 3, 4, 5 ,6 ,7 ,8 ,9,10]);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_questions_medcoms');
    }
};
