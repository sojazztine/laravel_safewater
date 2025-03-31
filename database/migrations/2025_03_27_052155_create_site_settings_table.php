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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('app_title');
            $table->string('app_subtitle');
            $table->string('app_description')->nullable();
            $table->string('app_keywords')->nullable();
            $table->string('app_version')->nullable();
            $table->string('web_login_link')->nullable();
            $table->string('web_register_link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
