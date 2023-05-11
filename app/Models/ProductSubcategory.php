<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getSubcategoryName(){
        
        return $this->belongsTo('App\Models\SubCategory', 'subCategory_id' , 'id');
    }

    public function getProducts(){

        return $this->belongsTo('App\Models\Product' , 'product_id', 'id');
    }
}
