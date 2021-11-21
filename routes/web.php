<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
///////////////////////////////////////
//-------------- overview---------------
///////////////////////////////////////

// Route::get('/home',[HomeController::class,'index']);
// Route::get('contact-us',[ContactController::class,'index']);

// ---initial process ---
// Route::get('users',[UserController::class,'index']);
// Route::get('users/{id}',[UserController::class,'show']);
// Route::get('create-user',[UserController::class,'create']);
// Route::get('users/{id}/delete',[UserController::class,'delete']);
// Route::get('users/{id}/edit',[UserController::class,'edit']);



// Route::get('/',function(){
//     return view('welcome');
// });

//////////////////////////////////////////
// ------------ final ----------------
//////////////////////////////////////////

// Route::get('users',[UserController::class,'index']);
// Route::get('create-user',[UserController::class,'create']);
// Route::post('add-user',[UserController::class,'store']);
// Route::put('edit-user',[UserController::class,'update']);
// Route::patch('edit-username',[UserController::class,'updateUsername']);
// Route::delete('delete-user',[UserController::class,'delete']);


/////////////////////////////////////////////////
///////////////// final refined /////////////////
/////////////////////////////////////////////////

// Route::get('users',[UserController::class,'index'])->name('user_list');
// Route::get('users/{id}',[UserController::class,'show'])->where('id','[0-9]+');
// Route::get('users/create',[UserController::class,'create']);
// Route::get('users/{id}/profile/{name?}',[UserController::class,'showIdName2']);
// Route::get('users/{id}/{name}',[UserController::class,'showIdName']);
// Route::post('users',[UserController::class,'store']);
// Route::put('users',[UserController::class,'update']);
// Route::patch('users',[UserController::class,'updateUsername']);
// Route::delete('users',[UserController::class,'delete']);
// Route::any('/test',[UserController::class,'any']);
// Route::redirect('/blabla', 'users', 301);
// Route::view('/', 'welcome');

// Route::prefix('/admin')->group(function(){
//     Route::get('create-admin',function(){
//         return "Create Admin";
//     });
//     Route::get('edit-admin',function(){
//         return "Edit Admin";
//     });
// });



// Route::get('create-customer',[CustomerController::class,'create']);
// Route::get('customers',[CustomerController::class,'index']);
// Route::get('first-customer',[CustomerController::class,'firstVal']);



// Route::get('create_post',[PostController::class,'create']);
// Route::get('create_post2',[PostController::class,'create2']);
// Route::get('posts',[PostController::class,'index']);
// Route::get('update_post/{id}',[PostController::class,'updatePost']);
// Route::get('delete_post/{id}',[PostController::class,'delete']);

// Route::get('one2one',[UserController::class,'one2one']);
// Route::get('one2one-inverse',[AddressController::class,'index']);
// Route::get('one2Many',[UserController::class,'one2Many']);




/////////////////////
// blade template///
////////////////////

// Route::get('users',function(){
//     return view('users.index');
// });
// Route::get('posts',function(){
//     // $posts = Post::all();
//     $posts = Post::take(3)->get();
//     return view('post.index',['posts'=>$posts]);
// });



/////////////////////
//// Middleware/////
////////////////////

// Route::get('one',function(){
//     return 'First page';
// })->middleware('test');

// Route::get('second',function(){
//     return 'Second page';
// });

// Route::middleware('test')->group(function () {
//     Route::get('second',function(){
//         return 'Second page';
//     });
//     Route::get('third',function(){
//         return 'third page';
//     });
    
// });




/////////////////////////////////////
//// Request and Form Validation/////
/////////////////////////////////////

// Route::get('add-user',[UserController::class,'addUser']);
// Route::post('store',[UserController::class,'storeUser']);




/////////////////////////////////////
//// Login, logout, registration/////
/////////////////////////////////////

// Route::get('/',function(){
//     return Auth::user()->email;
//     return Auth::user();
//     return "Home Page";
// })->middleware('auth');
// Route::get('login',[LoginController::class,'index'])->name('login');
// Route::get('logout',[LoginController::class,'logout']);
// Route::post('login',[LoginController::class,'login']);
// Route::get('register',[LoginController::class,'register']);
// Route::post('register',[LoginController::class,'store']);

// Route::get('isLoggedIn', function () {
//     if(Auth::check()){
//         return "A logged in user found";
//     }
//     else{
//         return "Plz log in";
//     }
// });



///////////////////////
//// File Storage /////
///////////////////////
Route::view('/file-upload','upload.image');
Route::post('/file-upload',[ImageUploadController::class,'store']);
Route::get('/files',[ImageUploadController::class,'showFiles']);
Route::get('/delete-file',[ImageUploadController::class,'delete']);