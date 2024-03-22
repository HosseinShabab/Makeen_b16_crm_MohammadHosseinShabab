<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('categories.index', ["categories"=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_id' => $request->category_id,
        ]);
        return redirect('/categories/index');
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
        $category = DB::table('categories')->where('id',$id)->first();
        return view('categories.edit', ["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCategoryRequest $request, string $id)
    {
        DB::table("categories")->where("id",$id)->update([
            'category_name' => $request->category_name,
            'category_id' => $request->category_id,
        ]);
        return redirect('/categories/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('categories')->where('id',$id)->delete();
        return redirect('/categories/index');
    }
}
