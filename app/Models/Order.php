<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = []; 
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'order_total',
        'total_payable',
        'payment_status',
        'address',
        'address_two',
        'country',
        'state',
        'zip',
        'payment_method',
        'order_type',
        'pickup_address_id',
        'pickup_date',
        'pickup_time',
        'customer_number',
        'transaction_number',
        'paid_amount'
    ];

    public function ordered_by()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function get_order_list()
    {
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }

    public function getOrderDetails(){
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }

}
