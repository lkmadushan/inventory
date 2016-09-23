<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::latest()->paginate();

        return response()->json($users->toArray());
    }

    public function store()
    {
        return User::create(request()->all());
    }

    public function show($user)
    {
        $user = User::where('id', $user)->first();

        return response()->json($user->toArray());
    }

    public function update(User $user)
    {
        $user->update(request()->all());

        return response()->json($user->toArray());
    }

}
