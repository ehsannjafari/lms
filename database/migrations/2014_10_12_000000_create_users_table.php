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
            $table->id();
            $table->string('username', 32);
            $table->string('first_name', 64)->nullable();
            $table->string('last_name', 64)->nullable();
            $table->string('email')->unique();
            $table->string('phone', '14')->unique()->nullable();
            $table->string('image')->default('noimage.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('head_line')->nullable();
            $table->text('bio')->nullable();
            $table->enum('status', ['active', 'inactive', 'ban'])->default('inactive');
            $table->rememberToken();

            // can be in a separate table
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
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
