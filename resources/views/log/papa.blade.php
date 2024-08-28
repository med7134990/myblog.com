@extends('layouts.app')
@section('content')

<form action="{{route('showProfilePic')  }}" method="POST" enctype="multipart/form-data" >
 <div class="flex flex-col gap-4">
 <label for="profile_picture">  choose the pic</label>
 <input type="file" name="profile_picture" accept="image/*">
 <p class=""><button class="bg-green-300">update</button></p>
 </div>
</form>
 @endsection