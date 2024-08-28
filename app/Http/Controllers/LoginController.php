<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //method for showing login form
    public function showLoginForm(){
        return view('log.login');
    }

    //method for authentication
    public function login(Request $request){
     $credendials=$request->only('email', 'password');

    if(Auth::attempt($credendials)){
        $request->session()->regenerate();
        
        return redirect()->route('users.profile', ['id' => Auth::user()]);
    }
    
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
    }
 

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showlog');
    }


    // public function showpapa(){
    //     return view('log.papa');
    // }

}
