 @extends('layouts.app')
@section('content')
    


    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col justify-center items-center  py-4">
        <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-center w-full  max-w-2xl">
        <h1 class="text-2xl font-bold mb-6 flex justify-center">All Users</h1>

            @if($users->isEmpty())
                <p>No users found.</p>
            @else
                <ul>
                    @foreach($users as $user)
                    <div class="flex flex-col justify-center ">
                        <li class="mb-4 border-b pb-2">
                            <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
                            <p>{{ $user->email }}</p>

                            
                        </li>
                    </div>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    {{-- </main> --}}

    <!-- Footer -->
    <footer class="bg-white shadow-md mt-8 rounded-lg">
        <div class="container mx-auto px-4 py-4 text-center">
            <p>&copy; {{ date('Y') }} MyBlog. All rights reserved.</p>
            <a href="{{ route('logout') }}" class="underline text-lg text-red-500">SignOut</a>
        </div>
    </footer>
</body>
</html>
@endsection 
