<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
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

    public function one2one()
    {
        $user = User::findOrFail(1);
        // return $user->name;
        // return $user->address; //address is defined inside User Model
        return $user->address->address; 
    }

    public function one2Many()
    {
        $user = User::findOrFail(1);
        // return $user->posts;
        // return $user->posts[0]->title;

        foreach($user->posts as $post){
            echo $post->title." </br>";
        }

    }


    public function addUser(Request $req)
    {   
        
        return view('users.addForm');
        $req->session->put('name','Jahid Hasan');

    }

    public function storeUser(CustomRequest $req)
    {
        // return $req->path();
        // return $req->method();
        // return $req->input('email');
        // $temp =  $req->input('name','John Doe');
        // $data = $req->all();
        // $data = $req->validate([
        //     'name' =>'required|string|max:3',
        // ]);
        // return $data;
            echo $req->session()->get('name');
        return $req->all();
        
    }
}
