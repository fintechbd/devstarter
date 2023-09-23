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
            $table->integer('parent_id')->nullable()->unsigned()->default(null);
            $table->string('name');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('loginid')->unique();
            $table->string('password');
            $table->string('pin');
            $table->string('status')->default('ACTIVE');
            $table->unsignedSmallInteger('wrong_password')->default(0);
            $table->unsignedSmallInteger('wrong_pin')->default(0);
            $table->string('app_version')->default('1');
            $table->string('fcm_token')->nullable();
            $table->string('language')->nullable();
            $table->string('currency')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
