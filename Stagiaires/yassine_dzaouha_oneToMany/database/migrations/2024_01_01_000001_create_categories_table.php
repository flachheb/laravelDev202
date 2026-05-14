<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This creates the "categories" table.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                        // Primary key (auto-increment)
            $table->string('name');              // Category name (e.g. "Electronics")
            $table->text('description')->nullable(); // Optional description
            $table->timestamps();               // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations (drop the table).
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
