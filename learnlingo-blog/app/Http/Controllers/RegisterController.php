<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        //return(request()->all());
        //validation
        $x = request()->validate([
            'name' => ['required'],
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:50']
        ]);

        //Hash password
        $x['password'] = bcrypt($x['password']);
        //Fail validation

        //Create a user:
        $y = User::create($x);

        //log the user in
        auth()->login($y);

        //Show successful message
        session()->flash('x', 'Your account was created successfully');
        //Redirect after submit
        return redirect('/');
    }
}
