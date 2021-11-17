<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // return "<h1>This a Contact controller</h1>";
        return view('contact/index');
    }
}
