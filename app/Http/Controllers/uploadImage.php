<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImage extends Controller
{
    public function image(){
        return view("uploadImage");
    }
    public function imageData(Request $request){
        // $request->validate[(
        //     "image"=>"required\mimes:pdf,jpg,png\max:2048"
        // )];



        // $d= public_path('images');
        // return $request->file("image")->move($d, $request->file('image')->getClientOriginalName());
        $file = $request->file("image");
        $path = $file->store("LPU");
        return $path;
    }
}
