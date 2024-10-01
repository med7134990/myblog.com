@extends('layouts.app')
@section('content')


  
    {{-- <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4 text-white">
            <a href="{{ route('home') }}" class="text-xl font-bold">MyBlog</a>
            <div class="space-x-4 text-white ">
                <a href="{{ route('home') }}" class="">Home</a>
                
                <a href="{{ route('users.index') }}" class="">Users</a>
                <a href="{{ route('showlog') }}" class="">Login</a>
                <a href="{{ route('showreg') }}" class="">Register</a>
            </div>
        </div>
    </div>
   </nav> --}}


    <div class="flex flex-col justify-center items-center bg-gray-200">
    <div class="bg-white rounded-lg mt-10 pt-3 max-w-2xl  ">

    <h1 class=" flex justify-center font-bold text-2xl">All posts</h1>
    
        @if($posts->isEmpty())
            <p>No posts found.</p>
        @else
            <ul>
                {{-- //this '$posts is a variable defined in a postcontroller' --}}
                        @foreach($posts as $post)
                        <div class="my-4  rounded ml-4" >
                            <li class="  ">
                            
                                <p class="underline font-bold">Posted by: {{ $post->user->name }}</p>
                                <h2 class="font-semibold">post title: {{ $post->title }}</h2>
                                <div class="bg-gray-300 rounded-lg p-4 mr-3">
                                <p class="font-gray-200 break-words mb-3">{{ $post->content }}</p>
                               </div>
                                @if ($post->comments->isNotEmpty())
                                @foreach ($post->comments as $comment)
                                @if ($comment->user)
                                <p>Comment by: {{ $comment->user->name }}</p>
                            @else
                                <p>Comment by: Anonymous</p> 
                            @endif
                            <p class="text-gray-400 font-sm pb-3">{{ $comment->content }}</p>
                                @endforeach
                            @else
                                <p>No comments available.</p>
                            @endif
                        {{-- <p><a href="comments/create/{{ $post->id }}" class="text-green-300 underline">  make a comment</a></p> --}}

                       
    
                    

                   @if(Auth::check())
                        <form action="{{ route('comment.make',['post' => $post->id]) }}" method="POST">
                         @csrf
                        <p>make a comment</p>
                        <input type="text" name="content" class="bg-gray-200 border-solid rounded-lg p-3"> 
                        <button type="submit" class="text-white bg-green-500 rounded-lg px-2 pb-1">submit</button>  
                       </form> 
                       @else
                       <p>please login to make a comment</p>
                       @endif
                        {{-- <input type="text" class="bg-gray-200 rounded"> --}}
                        {{-- <button type="submit" class="bg-green-500 rounded text-white">post</button> --}}
                        {{-- <p class="font-gray-200 break-words mb-3">{{ $post->comments->content }}</p> --}}
        
                        <hr>
                    </li>
                </div>
                @endforeach
               
            </ul>
        @endif
    </div>
    </div>

    <footer class="bg-white shadow-md mt-8 rounded-lg">
        <div class="container mx-auto px-4 py-4 text-center">
            <p>&copy; {{ date('Y') }} MyBlog. All rights reserved.</p>
            @if (Auth::check())
            <a href="{{ route('logout') }}" class="underline text-lg text-red-500">Logout</a>
               @else
               <p>please login</p> 
            @endif
        </div>
    </footer>
  </div>
@endsection

