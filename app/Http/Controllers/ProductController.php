<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($id = null)
    {
        if($id == null){
            $products = DB::table('products')->orderBy('id', 'desc')->paginate(10);
        }else{
            $products = DB::table('products')->where('id', $id)->first();
        }
        return response()->json($products);
    }

    public function store(CreateProductRequest $request)
    {
        $product = DB::table('products')->insert($request->toArray());
        return response()->json($product);
    }

    public function edit(CreateProductRequest $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->update($request->toArray());
        return response()->json($product);
    }

    public function destroy(string $id)
    {
        $product = DB::table('products')->where('id', $id)->delete();
        return response()->json($product);
    }
}
