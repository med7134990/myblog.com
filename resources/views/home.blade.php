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
                        <h2 class="font-semibold">{{ $post->title }}</h2>
                        <p class="font-gray-200 break-words mb-3">{{ $post->content }}</p>
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
          <a href="{{ route('logout') }}" class="underline text-lg text-red-500">Logout</a>
        </div>
    </footer>
  </div>
@endsection

