<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('users',[UserController::class,'index'])->name('user_list');
Route::get('users/{id}',[UserController::class,'show'])->where('id','[0-9]+');
Route::get('users/create',[UserController::class,'create']);
Route::get('users/{id}/profile/{name?}',[UserController::class,'showIdName2']);
Route::get('users/{id}/{name}',[UserController::class,'showIdName']);
Route::post('users',[UserController::class,'store']);
Route::put('users',[UserController::class,'update']);
Route::patch('users',[UserController::class,'updateUsername']);
Route::delete('users',[UserController::class,'delete']);
Route::any('/test',[UserController::class,'any']);
Route::redirect('/blabla', 'users', 301);
Route::view('/', 'welcome');

Route::prefix('/admin')->group(function(){
    Route::get('create-admin',function(){
        return "Create Admin";
    });
    Route::get('edit-admin',function(){
        return "Edit Admin";
    });
});