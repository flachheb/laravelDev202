<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    protected $fillable = ['name','email','password','bio','image'];
    use HasFactory;
    use SoftDeletes;

    public function getRouteKeyName(){
        return 'id';
    }

    public function getImageAttribute($value){
        return $value ?? "profiles/profile.png";
    }
}
