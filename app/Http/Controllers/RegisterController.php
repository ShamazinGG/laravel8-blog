<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
           'name' => 'required|string|max:255|min:3',
           'username' => 'required|max:255',
           'email' => 'required|email|max:255',
           'password' => 'required|min:5|max:255'
        ]);

        User::create($attributes);

        return redirect('/');

    }
}
