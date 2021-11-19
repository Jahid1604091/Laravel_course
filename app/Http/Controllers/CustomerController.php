<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function create()
    {
        DB::table('customers')->insert([
            ['name'=>'Jahid',"designation"=>"Student"],
            ['name'=>'John',"designation"=>"Student"]]
        );
    }

    public function index()
    {
        // return DB::table('customers')->get();
        // return DB::table('customers')->where('name','John')->get();
        // return DB::table('customers')->select('name as cutomer_name','id')->where('name','Jahid')->get();
        // return DB::table('customers')->find(2);
        // return DB::table('customers')->pluck('name');
        // return DB::table('customers')->count();
        // return DB::table('customers')->avg('name');

        return DB::table('customers')->select('customers.name','invoice.amount')->rightJoin('invoice','customers.id', '=' , 'invoice.customer_id')->get();

    }

    public function firstVal()
    {
        return DB::table('customers')->first();
    }
}
