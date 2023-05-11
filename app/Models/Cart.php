<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getproducts()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }

    public function getProductColor()
    {
        return $this->belongsTo(ProductColor::class, 'color', 'id');
    }

}

