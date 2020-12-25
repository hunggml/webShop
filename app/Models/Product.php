<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['id','image', 'name', 'type', 'status', 'price', 'note'];

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function productDetail()
    {
        return $this->hasOne('App\Models\ProductDetail');
    }

    public function orderDetail()
    {
        return $this->belongsTo('App\Models\OderDetail');
    }
}
