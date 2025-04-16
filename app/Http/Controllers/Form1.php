<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1 extends Controller
{
    //
    public function index(){
        return view("form1");
    }
    public function data1(Request $request)
{
    $data = [
        $request->input("name"),
        $request->input("city"),
        $request->input("course"),
        $request->input("fees"),
        $request->input("gender"),
        $request->input("address"),
    ];

    return view("index", ["data" => $data]);
}

}
