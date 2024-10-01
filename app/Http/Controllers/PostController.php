<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function showPostForm(){
        return view('posts.craete');
    }

    public function store(Request $request){
     $validated=$request->validate([
        'title'=>'required|string|max:255',
        'content'=>'required'
     ]);
   $posts= Post::create($validated +['user_id'=>auth()->user()->id]);//this will automatically pass the authenticated user's id
    return redirect()->route('users.profile', ['id' =>auth()->user()->id]);

    }

    public function index(){
        $posts = Post::with('user')->latest()->get();
        $comment=Comment::all();
        //dd($comment);
       // $users = User::all();
        //dd($users);
        return view('home', compact('posts'));
    }

    public function toProfile(){
        $posts = Post::all();
        $users = User::all();
        //dd($users);
        return view('users.profile', compact('posts'));
    }

    public function showComment(){
        $comment=Comment::all();
    }
}
