<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('back-end.orders.list',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = \Illuminate\Support\Facades\Session::get('cart');

        //add to customer table
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();

        //add to order table

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->orderDate = Carbon::now('Asia/Ho_Chi_Minh');
        $order->requiredDate = Carbon::now('Asia/Ho_Chi_Minh');
        $order->shippedDate = 'Đang chờ  xử lý ';
        $order->status = 'Đang chờ  xử lý ';
        $order->save();

        //add to orderDetail table

        foreach ($cart->items as $data) {
            $orderDetail = new OrderDetail();
            $orderDetail->product_id = $data['item']->id;
            $orderDetail->order_id = $order->id;
            $orderDetail->quantityOrder = $data['qty'];
            $orderDetail->price = $data['price'];
            $orderDetail->save();
        }

        \Illuminate\Support\Facades\Session::flush('cart');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('back-end.orders.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = DB::table('orders',$id)->where('id',$id)->update([
            'shippedDate' => $request->date,
            'status' => $request->status,
        ]);
        return redirect()->route('Order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
