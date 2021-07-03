<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
        'image'
    ];
    protected $attributes = [
        'image' =>' ',
    ];
    public function category(){
        //hasOne, hasMany, belongsTo, belongsToMany
       return $this->belongsTo(Category::class, 'category_id');
    }
}
