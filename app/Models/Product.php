<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // public function getSubCategory(){
    //     return $this->belongsTo('App\Models\SubCategory', 'subCategory_id', 'id');
    // }

    public function getSubCategories(){
        return $this->hasMany('App\Models\ProductSubcategory', 'product_id', 'id');
    }

    public function getCategory(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function getMultipleImages(){
        return $this->hasMany('App\Models\ProductImage');
    }

    public function getColors(){
        return $this->hasMany('App\Models\Color');
    }

    public function getSizes(){
        return $this->hasMany('App\Models\Size');
    }

}
