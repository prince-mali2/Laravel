<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class mysqlcontroller extends Controller
{
    public function select(){
        // $data = DB::select("select * from users");
        $data = DB::table('users')->select('name', 'email','password')->get();
        return view("index1",["data"=>$data]);
    }

    public function insert(){
        $data = DB::insert("insert into users(name, email,password)value(?,?,?)",
        ["sunil","suni123@gmialcom","123444"]);
        return redirect("select");

        
    }
    public function update(){
        $data = DB::update("update users set email=?, password=? where id=?", ["s7658@gmail.com", '0000',"1"]);
        return redirect("select");
    }

    public function delete(){
        $data = DB::delete("delete from users where id=?",[3]);
        return redirect("select");
    }
}


