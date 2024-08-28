<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class profileController extends Controller
{
    //
    // public function showProfileform(){
    //     return view('profilepic.update');
    // }

    public function update(Request $request)
    {
        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $user = $request->user();
    
        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }
    
           // Store the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
       
    
        $user->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    
    }
}    