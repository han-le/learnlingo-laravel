<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store(Request $request){

        $email = $request->email; // for testing

        // Validate the user input
        $userCredentials = $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ]);

        // If authentication fails
        if (!Auth::attempt($userCredentials)) {
            dd('wrong email or password');
        }

        //dd('you are logged in');
        return redirect('/');
    }

    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success', 'Log out');
    }
}
