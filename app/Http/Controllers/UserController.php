<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function store()
    {
        return User::create(request()->all());
    }
}
