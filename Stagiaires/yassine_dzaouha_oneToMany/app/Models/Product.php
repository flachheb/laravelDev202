<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    // These fields can be filled via forms (mass assignment)
    protected $fillable = ['name', 'description', 'price', 'stock', 'category_id'];

    /**
     * ONE Product BELONGS TO ONE Category.
     *
     * This is the "many" side of the One-to-Many relationship.
     * Usage: $product->category  → returns the category this product belongs to
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
        // Laravel automatically knows to use "category_id" as the foreign key
    }
}
