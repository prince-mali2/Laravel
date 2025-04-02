<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get("aman/{name}", function($name){
    return $name;
});

Route::get("aman1/{name?}", function($name=null){
    return $name;
});

Route::get("aman1/{name?}", function($name="Enter some value in URL"){
    return $name;
});

Route::view("index","index");
Route::view("lpu","lpu");

Route::get("admin",function(){
    return view("lpu");
});

Route::get("show",  function(){
    $course = "Laravel";
    $fee = 6000;
    return view("user",["course" => $course, "fee"=>$fee]);
});

//
Route::get("data",  function(){
    $course = "Laravel";
    $fee = 6000;
    return view("user",compact("course", "fee"));
});

//Withdata
Route::get("withdata",  function(){
    $course = "php";
    $fee = 6000;
    return view("user")->with("course",$course)-> with("fee",$fee);
});

//WithName
// Route::get("withnamedata",  function(){
//     $course = "data science";
//     $fee = 6000;
//     return view("user")->withCourse($course)-> withFee($fee);
// });

Route :: get("v1", function(){
    return view("view1");
});

Route :: get("v2", function(){
    return view("view2");
});

Route :: get("v3", function(){
    return view("view3");
});

//Redirect
Route::redirect("data","v3");

Route:: get('index',function(){
    return view("home");
});


// Route:: get('data/{role}', function($role){
//         switch($role){
//             case "admin":
//                 return "full access";
//             case  "teacher":
//                 return "Access limited section";
//             case "viewer":
//                 return "Only view content";       
//         }
// });

Route:: get('data/{role}', function($role){
    return view("home", compact("role"));
});

use App\Http\Controllers\ResourceController;
route::resource("profil", ResourceController::class);


Route:: get('data/{num}',function($num){
    return $num;
})-> whereNumber('num');


Route:: get('data1/{num}',function($num){
    return $num;
})-> whereAlpha('num');


Route:: get('data3/{num}',function($num){
    return $num;
})-> where('num',"[A-Za-z0-9]+");

Route::view("home","home")->middleware("check");
Route::view("about","about");

use App\Http\Middleware\CGPA;
Route::view("std","home")->middleware(CGPA::class);

///prefix
Route::prefix("student")->group(function(){
    Route::get("/list", function(){
        return "Hello student list";
    });
    Route::get("/show", function(){
        return "Hello student show data";
    });
    Route::get("/delete", function(){
        return "Hello student delete";
    });
});


use App\Http\Controllers\StudentData;
Route::controller(StudentData::class)->group(function(){
    Route::get("index","index");
    Route::get("show","show");
    Route::get("delete","delete");

});

// URL Generation
Route::get("home", function(){
    return view('home');
});
Route::get("about", function(){
    return view('about');
});

use App\Http\Controllers\Datacontroller;
Route::get("data",[Datacontroller:: class,"index"]);
Route::post("data",[Datacontroller:: class,"data"]);




Route::view("login", "login");
Route::view("profile", "profile");
use App\Http\Controllers\UserController;
Route::post("login", [UserController:: class,"login"]);
Route::get("logout", [UserController:: class,"logout"]);
