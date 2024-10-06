<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show admin login form
    public function login(){
        return view('users.login');
    }

    //Authenticate admin
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/admin')->with('message', 'User logged in successfully!');
        }
        
        return back()->withErrors(['email' => 'Invalid credentials!'])->onlyInput('email');
    }

    //logout admin
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User logged out!');
    }
}
