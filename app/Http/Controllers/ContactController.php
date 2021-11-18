<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ContactController extends Controller
{
    public function index()
    {
        // --process 1--
        // return "<h1>This a Contact controller</h1>";

        //--process 2--
        // $name = "Jahid Hasan";
        // return view('contact/index',['name'=>$name]);

        
        // --process 3--
        // $data = [];  // this data can be used as global inside Controller class
        // $data['creator'] = 'Jahid Hasan';
        // $data['contact_no'] = [
            //     "01715150941",
            //     "01918219152"
            // ];
            // $data['date'] = "21-11-21";

            // --process 4--
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
    