<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Datacontroller extends Controller
{
    //
    public function index(){
        return view("formdata");
    }
    public function data(Request $request){
        $name=$request->input("user");
        $email=$request->input("email");
        $password=$request->input("password");
        return view("index", ["data"=>[$name, $email , $password]]);

    }
    
}
