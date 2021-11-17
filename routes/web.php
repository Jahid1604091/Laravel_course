<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('contact-us',[ContactController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
