<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('users.index', ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        DB::table('users')->insert([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "gmail" => $request->gmail,
            "password" => $request->password,
            "age" => $request->age,
            "jender" => $request->jender,
            "address" => $request->address,
            "birth_day" => $request->birth_day,
            "country" => $request->country,
        ]);
        return redirect('/users/index');
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
        $user = DB::table('users')->where('id', $id)->first();
        return view('users.edit', ["user" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateUserRequest $request, string $id)
    {
        DB::table('users')->where('id', $id)->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "gmail" => $request->gmail,
            "password" => $request->password,
            "age" => $request->age,
            "jender" => $request->jender,
            "address" => $request->address,
            "birth_day" => $request->birth_day,
            "country" => $request->country,
        ]);
        return redirect('users/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where("id", $id)->delete();
        return redirect("/users/index");
    }
}
