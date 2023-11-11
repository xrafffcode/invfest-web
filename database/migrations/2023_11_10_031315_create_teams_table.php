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
        Schema::create('teams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('competition_id');
            $table->uuid('user_id');
            $table->string('team_name');
            $table->string('institution');
            $table->string('leader_name');
            $table->string('leader_phone');
            $table->string('leader_card');
            $table->string('companion_name')->nullable();
            $table->string('companion_card')->nullable();
            $table->enum('level', ['sma/smk', 'kuliah']);
            $table->enum('status', ['pending', 'accepted', 'rejected']);
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
