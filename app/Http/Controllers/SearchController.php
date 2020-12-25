<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchIphone(Request $request)
    {
        $product = DB::table('products')
            ->join('product_detail', 'id', '=', 'product_detail.product_id')
            ->select('products.*', 'product_detail.*')
            ->where('type', 'LIKE', 'iphone')
            ->get();
        return view('font-end.shopGrid', compact('product'));
    }

    public function searchIpad(Request $request)
    {
        $product = DB::table('products')
            ->join('product_detail', 'id', '=', 'product_detail.product_id')
            ->select('products.*', 'product_detail.*')
            ->where('type', 'LIKE', 'ipad')
            ->get();
        return view('font-end.shopGrid', compact('product'));
    }

    public function searchMacBook(Request $request)
    {
        $product = DB::table('products')
            ->join('product_detail', 'id', '=', 'product_detail.product_id')
            ->select('products.*', 'product_detail.*')
            ->where('type', 'LIKE', 'macbook')
            ->get();
        return view('font-end.shopGrid', compact('product'));
    }

    public function searchAppleWatch(Request $request)
    {
        $product = DB::table('products')
            ->join('product_detail', 'id', '=', 'product_detail.product_id')
            ->select('products.*', 'product_detail.*')
            ->where('type', 'LIKE', 'apple watch')
            ->get();
        return view('font-end.shopGrid', compact('product'));
    }

    public function search(Request $request)
    {
        $product = DB::table('products')
            ->join('product_detail', 'id', '=', 'product_detail.product_id')
            ->select('products.*', 'product_detail.*')
            ->where('name', 'LIKE', '%' . $request->name . '%')
            ->get();
        return view('font-end.shopGrid', compact('product'));
    }

}
