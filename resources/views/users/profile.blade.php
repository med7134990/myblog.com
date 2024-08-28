
    @extends('layouts.app')
    @section('content')

   

    
    <main class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">{{ $user->name }}'s Profile</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-row justify-between max-w-full">
          <div class="flex flex-col justify-center">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>
            <p><a href="/posts/create" class="text-green-600 underline">create a new post</a></p>
            <form action="{{route('profile.update')  }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="flex flex-col gap-4">
                <label for="profile_picture"></label>
                <input type="file" name="profile_picture" accept="image/*" class="pt-4 pb-4  border-bold">
            </div>
            
            <div class="flex flex-col gap-2 ">
                {{-- @if (auth()->user()->profile_picture) --}}
                <label for="profile_picture" class="underline mb-3">profile picture</label>
                <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="profile-pic w-20 h-15 rounded-full">
                <p class=""><button type="submit" class="bg-green-300 rounded-lg">update</button></p>

          {{-- @else
            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Picture" class="profile-pic size-sm"> --}}
           
            {{-- @endif --}}
        </div>
        </form>
        </div>
        
       


            {{-- <div class="flex flex-col  ">
            @if (auth()->user()->profile_picture)
            <label for="profile_picture" class="underline mb-3">profile picture</label>
            <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="profile-pic h-10 rounded-full"  >

          @else
            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Picture" class="profile-pic size-sm">
           
          @endif
        </div> --}}
        
    

       
    </main>

     {{-- //this 'posts' is a function from the user model, which has many post --}}
     @if(auth()->user() && auth()->user()->posts->isNotEmpty())
     @foreach (auth()->user()->posts as $post)
         @if (!empty($post->content))
         <div class="flex flex-col  items-center gap-3 bg-white rounded-lg max-w-full mx-12">
             <h3 class="underline font-semibold">{{ $post->title }}</h3>
             <p class="text-gray-500">{{ $post->content }}</p>
         </div>
         @endif
     @endforeach
 @else
     <p>No posts available.</p>
 @endif

    
    <footer class="bg-white shadow-md mt-8 rounded-lg">
        <div class="container mx-auto px-4 py-4 text-center">
            <p>&copy; {{ date('Y') }} MyBlog. All rights reserved.</p>
          <a href="{{ route('logout') }}" class="underline text-lg text-red-500">Logout</a>
        </div>
    </footer>
</div> 
{{-- </body> --}}
{{-- </html> --}}
@endsection
