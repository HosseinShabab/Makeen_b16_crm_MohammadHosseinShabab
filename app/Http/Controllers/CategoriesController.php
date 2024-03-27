<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            $categories = DB::table('categories')->orderBy('id', 'desc')->paginate(10);
        }else{
            $categories = DB::table('categories')->where('id', $id)->first();
        }
        return response()->json($categories);
    }

    public function store(CreateCategoryRequest $request)
    {
        $category = DB::table('categories')->insert($request->toArray());
        return response()->json($category);
    }

    public function edit(CreateCategoryRequest $request, $id)
    {
        $category = DB::table('categories')->where('id', $id)->update($request->toArray());
        return response()->json($category);
    }

    public function destroy( $id)
    {
        $category = DB::table('categories')->where('id', $id)->delete();
        return response()->json($category);
    }
}
