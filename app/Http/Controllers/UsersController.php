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
            'employee_id' => 'required | unique:users,employee_id',
            'first_name' => 'required',
            /*'last_name' => 'required',
            'title' => 'required',
            'department' => 'required',
            'home_phone' => 'required',
            'mobile_phone' => 'required',
            'email' => 'required | email | unique:users,email',
            'primary_address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'name' => 'required | unique:users,name',
            'password' => 'required|same:password_confirm'*/

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
        $this->validate(request(), [
            'employee_id' => 'required',
            'first_name' => 'required',
            /*'last_name' => 'required',
            'title' => 'required',
            'department' => 'required',
            'home_phone' => 'required',
            'mobile_phone' => 'required',
            'email' => 'required | email',
            'primary_address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'name' => 'required',
            'password' => 'required|same:password_confirm'*/

        ]);


        $user->update(request()->all());

        return response()->json($user->toArray());
    }

    public function delete(User $user)
    {
        $user->delete($user);

        return response()->json($user->toArray());
    }

}
