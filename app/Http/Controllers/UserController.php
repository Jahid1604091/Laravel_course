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

    public function showIdName($id,$name)
    {
        return $id." ".$name;
    }
    public function showIdName2($id,$name='jahid')
    {
        return $id." ".$name;
    }

    public function create()
    {
        //------process overview-----
        // $data = [
        //     "name"=>"Jahid Hasan",
        //     "email"=>"jh@gmail.com",
        //     "password"=>"123456"
        // ];

        // //create a field inside database
        // User::create($data);
        // return "Created a new user !";

        //----process final------
        return view('users.create');
    }

    public function store()
    {
        return "User stored";
    }

    //process - 1
    // public function delete($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();
    //     return "deleted user!";
    // }

    //--final process
    public function delete()
    {
       
        return "deleted user!";
    }

    public function edit ($id)
    {
        $user = User::findOrFail($id);
        $user->name = "New name";
        $user->save();
        return "User Edited";
    }

    //---process final---
    public function update ()
    {
       
        return "User Updated";
    }

    //---process final---
    public function updateUsername ()
    {
       
        return "User name Updated";
    }

    public function any()
    {
        return "I am from any";
    }
}
