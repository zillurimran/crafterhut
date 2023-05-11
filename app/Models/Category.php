<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getUser(){
        return $this->belongsTo('App\Models\User', 'added_by' , 'id');
    }

    public function getSubCategory(){
        return $this->hasMany('App\Models\SubCategory')->where('status', 'show');
    } 

    public function getProducts()
    {
        return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }
}
