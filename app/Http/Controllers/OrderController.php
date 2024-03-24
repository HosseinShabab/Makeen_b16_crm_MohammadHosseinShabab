<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DB::table('orders')->get();
        return view('orders.index', ['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOrderRequest $request)
    {
        DB::table('orders')->insert($request->except('_token'));
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = DB::table("orders")->where('id', $id)->first();
        return view('orders.edit', ['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateOrderRequest $request, string $id)
    {
        DB::table('orders')->where('id', $id)->update($request->except('_token'));
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('orders')->where("id",$id)->delete();
        return redirect()->route('orders.index');
    }
}
