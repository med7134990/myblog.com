<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    //showing the registration form
    public function showRegistrationForm(){
        return view('reg.register');
    }

    //regitering the user
    public function register(Request $request){ 
      $credential=$request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password'=>'required|string',
       // 'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
      ]);
       
     $user= User::create($credential);
     
//      if ($request->hasFile('profile_picture')) {
//       $path = $request->file('profile_picture')->store('profile_picture','public');
//       $user->profile_picture = $path;
//       $user->save();
//   }  else {
    
//     $user->profile_picture = null;
//     $user->save();
// }

      
     return redirect()->route('home')->with('success', 'Registration successful!');

      
    }
    

    public function index(){
      
      return view('home');
    }


    // public function showProfileForm(){
    //   return view('updateprofile.update');
    // }

    public function logout(Request $request){
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/');

    }
}
