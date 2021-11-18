<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function create()
    {
        
        $data = [
            "name"=>"Jahid Hasan",
            "email"=>"jh@gmail.com",
            "password"=>"123456"
        ];

        //create a field inside database
        User::create($data);
        return "Created a new user !";
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return "deleted user!";
    }

    public function edit ($id)
    {
        $user = User::findOrFail($id);
        $user->name = "New name";
        $user->save();
        return "User Edited";
    }
}
