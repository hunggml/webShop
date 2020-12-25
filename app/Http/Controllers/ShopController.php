<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')
            ->join('product_detail', 'id', '=', 'product_detail.product_id')
            ->select('products.*', 'product_detail.*')
            ->get();
        return view('font-end.shopGrid', compact('product'));
    }


}
