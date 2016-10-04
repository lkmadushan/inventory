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
        $this->validate(request(), [
            'first_name' => 'exists:users,first_name'
        ]);

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

    public function delete(User $user)
    {
        $user->delete($user);

        return response()->json($user->toArray());
    }

}
