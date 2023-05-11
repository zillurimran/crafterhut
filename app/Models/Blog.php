<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getBlogCategory(){

        return $this->belongsTo('App\Models\BlogCategory', 'category_id', 'id');
    }

    public function getMultipleImages(){

        return $this->hasMany('App\Models\BlogImage', 'blog_id', 'id');
    }
}
