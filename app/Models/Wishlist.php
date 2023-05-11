<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getProducts(){
        
        return $this->belongsTo('App\Models\Product', 'product_id' , 'id');
    }
}
