{{-- @extends('layouts.app')
@section('content') --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-gray-200 p-6 rounded-lg shadow-lg w-full max-w-lg">

<div class='flex flex-col gap-2 justify-center'>

    {{-- <label for="post" class="flex text-center" >enter your post</label> --}}
    <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col gap-3 mx-4 rounded">
        @csrf
    <input type="text" name="title" placeholder="title" class="rounded">
    <textarea type="text" placeholder="whats up" class='rounded py-10' name='content'></textarea>
    <button type="submit" class="bg-blue-400 rounded">post</button>
</form>
</div>
</body>
</html>