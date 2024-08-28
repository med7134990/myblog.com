@extends('layouts.app')
@section('content')


<form action="{{ route('login') }}" method="POST">
   @csrf
   
   <div class="flex flex-col justify-center items-center h-screen  bg-gray-200 ">
      <div class="flex flex-col gap-7 mx-auto  justify-center max-w-2xl w-full bg-gray-200 mb-2">
    <h1 class="underline  flex justify-center items-center font-bold text-2xl">login</h1> 
   <label for="email" type="email" class="pl-2 font-semibold" >enter email</label>
   <input type="text" name="email" type="email" placeholder="Email" class="py-3 rounded pl-2">
   <label for="password" class="pl-2 font-semibold">enter password</label>
   <input type="password" name="password" placeholder="password" class="py-3 rounded pl-2">

   <button type="submit" class="bg-green-500 rounded py-4 text-white">Sign in</button>
</div>
</div>
</form>
@endsection