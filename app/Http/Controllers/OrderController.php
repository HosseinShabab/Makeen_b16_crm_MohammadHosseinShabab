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
            $orders = DB::table('orders')->orderBy('id', 'desc')->paginate(10);
        }else{
            $orders = DB::table('orders')->where('id', $id)->first();
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
