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
        Schema::create('web_configurations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('favicon');
            $table->string('title');
            $table->string('heading');
            $table->string('description');
            $table->string('nav_logo');
            $table->string('footer_logo');
            $table->string('footer_description');
            $table->string('footer_copyrigth');
            $table->date('deadline');
            $table->string('email');
            $table->string('phone');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->string('twibbon');
            $table->string('twibbon_link');
            $table->string('mascot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_configurations');
    }
};
