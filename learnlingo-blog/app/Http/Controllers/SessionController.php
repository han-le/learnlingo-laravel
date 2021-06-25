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

            // back(): Create a new redirect response to the previous location (log in form)
            // withErrors(): Flash a container of errors to the session
            // withInput(): Keep the user input
            return back()->withInput()->withErrors([
                'email' => 'Wrong email or password',
                'password' => 'Wrong email or password'
            ]);
        }

        // Generate a new session identifier to prevent session fixation
        session()->regenerate();

        return redirect('/')->with('success', 'You are logged in successfully');
    }

    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success', 'Log out');
    }
}
