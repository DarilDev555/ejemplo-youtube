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
        Schema::create('users', function (Blueprint $table) {
            $table->id();// autoincremental y unique
            $table->string('name'); // varchar
            $table->string('email')->unique(); // varchar y unique
            $table->timestamp('email_verified_at')->nullable(); //YYYYmmDD 
            $table->string('password'); 
            $table->rememberToken();
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
