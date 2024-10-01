<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    // public function showComentForm(){
    //     return view('comments.create');
    // }

    public function makeComment(Request $request,$postId){
     $mycomment=$request->validate([
        'content'=>'required|string',
 ]);

 
 $comments=Comment::create(
    [
        'content'=>$request['content'],
        'post_id'=>$postId,
        'user_id'=>auth()->user()->id
                                       
      ]);
 return redirect()->route('users.profile', ['id' =>auth()->user()->id]);
    }

    public function showComment(){
       // $comment=Comment::all();
    }
}
