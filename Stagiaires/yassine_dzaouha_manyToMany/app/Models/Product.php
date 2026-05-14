<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock'];

    /**
     * A Product BELONGS TO MANY Categories.
     *
     * Notice: both sides use belongsToMany (unlike project 1
     * where one side was hasMany and the other was belongsTo)
     *
     * Usage: $product->categories  → returns all categories of this product
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
