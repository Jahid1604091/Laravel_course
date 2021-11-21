<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function store(Request$req)
    {
        // $originalFileName = $req->file('image')->getClientOriginalName();
        // $originalFileExtension = $req->file('image')->extension();

        //to store inside storage/app/images - process 1 [but it is not publicly accesible]
        // $path = $req->file('image')->store('images');

       // to store inside storage/app/public/images
        $path = $req->file('image')->store('images','public');
        return $path;

        //renaming file
        // $path2 = $req->file('image')->storeAs('images','testname') ;
        // return $path2;
    }


    public function showFiles()
    {
        //saved url in DB to show image
        $url =  Storage::url('images/LcSZ9tGKbSGQmGJK0yJqjnymB6rYfezHFTTYDcJF.jpg');
        //complete url
        // echo asset(Storage::url('images/OhovohZQBXLsHoSqiUbyMWS3HjA1ENYOz6tjBJPk.jpg'));
        echo "<img src='$url' alt=''>";
    }

    public function delete()
    {
        // Storage::delete('public/images/LcSZ9tGKbSGQmGJK0yJqjnymB6rYfezHFTTYDcJF.jpg');
        
        //alternate way
        Storage::disk('public')->delete('images/LcSZ9tGKbSGQmGJK0yJqjnymB6rYfezHFTTYDcJF.jpg');
    }
}
