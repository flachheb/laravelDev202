<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category','name','price','description','stock',
        'image','specs','ports','details','rating','reviews'
    ];
    protected $casts = [
        'specs'=>'array',
        'ports'=> 'array'
    ];
}
