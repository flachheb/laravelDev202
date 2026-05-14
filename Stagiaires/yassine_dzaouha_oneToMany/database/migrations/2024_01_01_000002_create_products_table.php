<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This creates the "products" table.
     *
     * RELATIONSHIP: One Category → Many Products
     * The "category_id" column is the FOREIGN KEY that links
     * each product to its category.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                        // Primary key
            $table->string('name');              // Product name
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 8, 2);      // Price (e.g. 99.99)
            $table->integer('stock')->default(0); // How many in stock

            // FOREIGN KEY — this is what makes the One-to-Many relationship work!
            // Each product belongs to ONE category.
            $table->foreignId('category_id')
                  ->constrained()          // References categories.id
                  ->onDelete('cascade');   // If category is deleted, delete its products too

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
