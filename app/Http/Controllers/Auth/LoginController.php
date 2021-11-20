<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $req)
    {
        $data = $req->only(['email','password']);
        if(Auth::attempt($data)){
            return redirect()->intended('/');
        }
        return redirect()->to('/login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $req)
    {
        $data = $req->only(['name','email']);
        $data['password'] = Hash::make($req->get('password'));
        $temp = User::create($data);
        return $temp;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/login');
    }
}
