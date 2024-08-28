<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-between ">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full  ">
        <nav class="bg-blue-500 shadow-md rounded  mt-3 max-w-full">
            <div class="container mx-auto px-4 ">
                <div class="flex justify-between items-center py-4 text-white ">
                    <a href="{{ route('home') }}" class="text-xl font-bold hover:underline">MyBlog</a>
                    <div class="space-x-4 text-white">
                        <a href="{{ route('home') }}" class="hover:underline">Home</a>
                        
                        <a href="{{ route('users.index') }}" class="hover:underline">Users</a>
                        <a href="{{ route('showlog') }}" class="hover:underline">Login</a>
                        <a href="{{ route('showreg') }}" class="hover:underline">Register</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        
    </div>
    
</body>
</html>