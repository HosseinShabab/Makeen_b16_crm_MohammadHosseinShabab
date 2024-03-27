<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            $orders = DB::table('orders')->join('users','orders.user_id', '=', 'users.id')->leftJoin('products', 'orders.product_id','=','products.id')->select('orders.*', 'users.first_name','users.last_name', 'users.gmail','users.address','products.product_name','products.color')->orderBy('id', 'desc')->paginate(10);
        }else{
            $orders = DB::table('orders')->join('users','orders.user_id', '=', 'users.id')->leftJoin('products', 'orders.product_id','=','products.id')->where('orders.id', $id)->select('orders.*', 'users.first_name','users.last_name', 'users.gmail','users.address','products.product_name','products.color')->first();
        }
        return response()->json($orders);
    }

    public function store(CreateOrderRequest $request)
    {
       $order = DB::table('orders')->insert($request->toArray());
        return response()->json($order);
    }

    public function edit(CreateOrderRequest $request, $id)
    {
        $order = DB::table("orders")->where('id', $id)->update($request->toArray());
        return response()->json($order);
    }

    public function destroy( $id)
    {
       $order = DB::table('orders')->where("id", $id)->delete();
        return response()->json($order);
    }
}
