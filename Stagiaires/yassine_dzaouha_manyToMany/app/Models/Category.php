<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * A Category BELONGS TO MANY Products.
     *
     * Laravel automatically looks for the pivot table "category_product"
     * Usage: $category->products  → returns all products in this category
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
