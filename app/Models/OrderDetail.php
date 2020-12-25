<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $fillable = ['id','order_id','customer_id','quantityOrder','price'];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}
