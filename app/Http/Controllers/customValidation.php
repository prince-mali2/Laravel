<?php

namespace App\Http\Controllers;
use App\Rules\upperCase;


use Illuminate\Http\Request;

class customValidation extends Controller
{
    public function index(){
        return view("custom");
    }
    public function dataForm( Request $request){
        
        $request->validate([
            "name"=>["required", new Uppercase]
        ]);

        return $request->all();
    }
}
