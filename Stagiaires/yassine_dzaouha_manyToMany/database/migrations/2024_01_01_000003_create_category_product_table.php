<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * =====================================================
     * THIS IS THE PIVOT TABLE — the key of Many-to-Many
     * =====================================================
     *
     * It sits between categories and products.
     * It only contains two foreign keys:
     *   - category_id → points to categories.id
     *   - product_id  → points to products.id
     *
     * Naming rule: Laravel expects the two table names in
     * alphabetical order, separated by underscore:
     * "categories" + "products" → "category_product"
     *
     * Example rows in this table:
     * category_id | product_id
     * ------------|------------
     *      1      |     1       ← iPhone belongs to Electronics
     *      2      |     1       ← iPhone also belongs to Deals
     *      1      |     2       ← MacBook belongs to Electronics
     */
    public function up(): void
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();

            // Foreign key → categories table (long way, like your teacher)
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            // Foreign key → products table (long way, like your teacher)
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_product');
    }
};
