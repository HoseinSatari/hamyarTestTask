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
        Schema::create('information_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('company_name')->nullable();
            $table->string('type_company')->nullable();
            $table->string('register_number')->nullable();
            $table->string('register_address')->nullable();
            $table->string('sub_name_company')->nullable();
            $table->string('name_mother_company')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('url_website')->nullable();
            $table->string('email')->nullable();
            $table->string('manger_name')->nullable();
            $table->string('employees_number')->nullable();
            $table->string('income_period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_companies');
    }
};
