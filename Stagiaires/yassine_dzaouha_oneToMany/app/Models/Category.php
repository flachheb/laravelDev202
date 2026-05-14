<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // These fields can be filled via forms (mass assignment)
    protected $fillable = ['name', 'description'];

    /**
     * ONE Category HAS MANY Products.
     *
     * This is the "one" side of the One-to-Many relationship.
     * Usage: $category->products  → returns all products in this category
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
        // Laravel automatically knows to use "category_id" as the foreign key
    }
}
