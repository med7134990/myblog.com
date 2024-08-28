<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        $users=User::all();
        return view('users.index', compact('users'));
    }

    public function profile($id)
{
    $user = User::findOrFail($id);
    return view('users.profile', compact('user'));
}
}

// public function update(Request $request)
// {
//     $request->validate([
//         'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//     ]);

//     $user = auth()->user();

//     if ($request->hasFile('profile_picture')) {
//         // Delete the old profile picture if it exists
//         if ($user->profile_picture) {
//             Storage::delete($user->profile_picture);
//         }

//        // Store the new profile picture
//         $path = $request->file('profile_picture')->store('profile_pictures');
//         $user->profile_picture = $path;
   

//     $user->save();

//     return redirect()->back()->with('success', 'Profile updated successfully');
// }

// }
