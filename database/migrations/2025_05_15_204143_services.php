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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->unique();
            $table->string('image')->nullable();
            $table->integer('listings');
            $table->enum('status', ['busy', 'available'])->default('available');
            $table->enum('type', ['timecount', 'freelance']);
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            $table->foreignId('provider')->constrained()->onDelete('cascade');
            $table->string('local');
            $table->float('rating')->default(0);
            $table->integer('rating_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
