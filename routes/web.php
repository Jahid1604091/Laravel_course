<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'index']);
Route::get('contact-us',[ContactController::class,'index']);

Route::get('/',function(){
    return view('welcome');
});