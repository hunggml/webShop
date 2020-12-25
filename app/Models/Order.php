<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable =['id','orderDate','requiredDate','shippedDate','status','customer_id'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function oderDetail()
    {
        return $this->belongsTo('App\Models\OrderDetail');
    }
}
