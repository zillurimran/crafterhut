<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function get_product_info()
    {
        return $this->belongsTo('App\Models\Product', 'prod_id', 'id');
    }
    
}
