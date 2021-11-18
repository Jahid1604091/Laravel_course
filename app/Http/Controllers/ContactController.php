<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ContactController extends Controller
{
    public function index()
    {
        // --step 1--
        // return "<h1>This a Contact controller</h1>";

        //--step 2--
        // $name = "Jahid Hasan";
        // return view('contact/index',['name'=>$name]);

        //--step 3--
        $today = date("F j, Y, g:i a");
        $data = [
            "creator" => "jahid Hasan",
            "date" => $today,
            "contact_no" => [
                 "01715150941",
                "01918219152"
            ],

        ];
        return view('contact.index', $data);
    }
}
