<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id = null)
    {
        if($id == null){
            $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(10);
        }else{
            $posts = DB::table('posts')->where('id', $id)->first();
        }
        return response()->json($posts);
     }

    public function store(CreatePostRequest $request)
    {
        $post = DB::table('posts')->insert($request->toArray());
       return response()->json($post);
    }

    public function edit(CreatePostRequest $request, $id)
    {
        $post = DB::table('posts')->where('id', $id)->update($request-> toArray());
        return response()->json($post);
    }

    public function destroy( $id)
    {
        $post = DB::table('posts')->where('id',$id)->delete();
        return response()->json($post);
    }
}
