<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts'=> $posts]);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories_id = DB::table('categories')->select("category_id")->get();
        return view('/posts/create',["categories_id"=> $categories_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        DB::table('posts')->insert([
            "post_title"=> $request->post_title,
            "post_content"=> $request->post_content,
            "category_id"=> $request->category_id,
        ]);
       return redirect('/posts/index');
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
        $post = DB::table('posts')->where("id",$id)->first();
        $categories_id = DB::table('categories')->select("category_id")->get();
        return view('posts.edit', ['post'=>$post , 'categories_id'=>$categories_id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequest $request, string $id)
    {
        DB::table('posts')->where("id", $id)->update([
            "post_title"=> $request->post_title,
            "post_content"=> $request->post_content,
            "category_id"=> $request->category_id,
        ]);
        return redirect('/posts/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('posts/index');
    }
}
