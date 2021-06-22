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

    public function show() {

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
        User::create($x);

        //Redirect after submit
        dd('created successfullyNe');
    }
}
