<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_detail';
    protected $fillable = ['product_id','product_name','size','ram','capacity','sim','screen_size','cpu','gpu','pin'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
