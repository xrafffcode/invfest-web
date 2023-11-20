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
            $table->string('favicon')->default('assets/web-configurations/placeholder.png');
            $table->string('title');
            $table->string('slogan');
            $table->string('heading');
            $table->longText('description');
            $table->string('nav_logo')->default('assets/web-configurations/placeholder.png');
            $table->string('footer_logo')->default('assets/web-configurations/placeholder.png');
            $table->string('footer_description');
            $table->string('footer_copyrigth');
            $table->datetimes('deadline');
            $table->string('email');
            $table->string('phone');
            $table->string('primary_color');
            $table->string('primary_color_hover');
            $table->string('secondary_color');
            $table->string('secondary_color_hover');
            $table->string('twibbon')->default('assets/web-configurations/placeholder.png');
            $table->string('twibbon_link');
            $table->string('mascot')->default('assets/web-configurations/placeholder.png');
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
