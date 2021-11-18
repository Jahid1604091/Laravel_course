<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'index']);
Route::get('contact-us',[ContactController::class,'index']);


Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::get('create-user',[UserController::class,'create']);
Route::get('users/{id}/delete',[UserController::class,'delete']);
Route::get('users/{id}/edit',[UserController::class,'edit']);



Route::get('/',function(){
    return view('welcome');
});