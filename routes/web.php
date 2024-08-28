<?php
                                     
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\profileController;

// Route::get('/', function () {       
//     return view('welcome');
// });                                  
 //Route::get('/',[RegistrationController::class, 'index'])->name('home'); 

 //this is the root/home route it shows all the posts
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/reg/register', [RegistrationController::class, 'showRegistrationForm'])->name('showreg');
Route::post('/reg', [RegistrationController::class, 'register'])->name('register');


Route::get('/log/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('showlog');
Route::post('/log', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//this route shows all the users
Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UsersController::class, 'profile'])->middleware('auth')->name('users.profile');

Route::get('/posts/create', [PostController::class, 'showPostForm'])->name('posts');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('/profilepic/update', [profileController::class, 'showprofileform'])->name('showProfilePic');
Route::post('/update', [profileController::class, 'update'])->name('profile.update');


//Route::get('/log/papa', [LoginController::class, 'showpapa'])->name('showpapa');


    
