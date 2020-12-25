<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductDetailRequest;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productDetail = ProductDetail::all();
        return view('back-end.productDetail.list', compact('productDetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = \App\Models\Product::all();
        return view('back-end.productDetail.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductDetailRequest $request)
    {
        $productDetail = new ProductDetail();
        $productDetail->fill($request->all());
        $productDetail->product_name = $request->product_name;
        $productDetail->save();


        return redirect()->route('productDetail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::all();
        $productDetail = DB::table('product_detail')->where('product_id', $product_id)->first();
        return view('back-end.productDetail.edit', compact('productDetail', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductDetailRequest $request, $product_id)
    {
        $productDetail = DB::table('product_detail', $product_id)->where('product_id', $product_id)->update([
            'product_name' => $request->product_name,
            'size' => $request->size,
            'ram' => $request->ram,
            'capacity' => $request->capacity,
            'sim' => $request->sim,
            'screen_size' => $request->screen_size,
            'cpu' => $request->cpu,
            'gpu' => $request->gpu,
            'pin' => $request->pin,

        ]);
        return redirect()->route('productDetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $productDetail = DB::table('product_detail', $product_id)->where('product_id', $product_id)->delete();
        return redirect()->route('productDetail.index');

    }

}
