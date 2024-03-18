<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('/products.index', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        DB::table('products')->insert([
            "product_name" => $request->product_name,
            "color" => $request->color,
            "manufactorer" => $request->manufactorer,
            "amount" => $request->amount,
            "price" => $request->price,
            "warranty" => $request->warranty,
            "warranty_manufactorer" => $request->warranty_manufactorer,
            "date_of_supply" => $request->date_of_supply,
        ]);
        return redirect('/products/index');
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
        $product = DB::table('products')->where('id', $id)->first();
        return view('/products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProductRequest $request, string $id)
    {
        DB::table("products")->where('id', $id)->update([
            "product_name" => $request->product_name,
            "color" => $request->color,
            "manufactorer" => $request->manufactorer,
            "amount" => $request->amount,
            "price" => $request->price,
            "warranty" => $request->warranty,
            "warranty_manufactorer" => $request->warranty_manufactorer,
            "date_of_supply" => $request->date_of_supply,
        ]);
        return redirect('/products/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/products/index');
    }
}
