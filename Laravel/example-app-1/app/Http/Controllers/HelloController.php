<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function helloAction(){
        return view('test',['name' => "Ahmad","age" => 30 ,
         "books" => ['comic',"drama","action","science"]]);
    }
    public function hiAction(){
        return "Hi There";
    }
    public function byeAction(){
        return "Good Bye";
    }
}
