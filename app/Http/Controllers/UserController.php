<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index($id = null)
    {
        if ($id == null) {
            $users = DB::table('users')->orderBy('id', 'desc')->paginate(10);
        } else {
            $users = DB::table('users')->where("id", $id)->first();
        }
        return response()->json($users);
    }

    public function store(CreateUserRequest $request)
    {
        $user = DB::table('users')->insert($request->toArray());
        return response()->json($user);
    }

    public function edit(CreateUserRequest $request, $id)
    {
        $user = DB::table('users')->where('id', $id)->update($request->toArray());
        return response()->json($user);
    }

    public function destroy(string $id)
    {
        $user = DB::table('users')->where("id", $id)->delete();
        return response()->json($user);
    }
}
