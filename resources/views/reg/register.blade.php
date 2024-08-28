@extends('layouts.app')
@section('content')

<div class="">
<div>
<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="">
    @csrf
        
      <div class="flex flex-col justify-center items-center  bg-gray-200 mt-3">
        <div class="flex flex-col gap-7 mx-auto  justify-center max-w-2xl w-full bg-gray-200">
        <h1 class="mt-3 flex justify-center mb-3 underline font-bold">User Registeration</h1>
        {{-- <label for="profile_picture" class="font-semibold">choose a profile pic</label>
        <input id="profile_picture" type="file" name="profile_picture" accept="image/*" class="pt-4 pb-4 rounded border-bold "> --}}
        <label for="name" id="name">name</label>
        <input type="text" name='name' placeholder="name" class="py-4 rounded border-bold ">
        <label for="password">password</label>
        <input type="password" name='password' placeholder="password" class="py-4 rounded">
        <label for="email">email</label>
        <input type="text" name='email' placeholder="email" class="py-4 rounded">


        <button type="submit"  class="bg-blue-500 py-4 rounded text-white mx-3 ">create a new user</button>
        </div>
     </div>
</form>
</div>
</div>
@endsection