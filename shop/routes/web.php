<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[\App\Http\Controllers\HomeController::class,"home"]);

Route::get("/login", function (){
    return view("login");
});

Route::post('/login',function (Request $requests){
   if ($requests->username == "admin" && $requests->password == "admin"){
       return view('welcome_admin');
   }
       return view("login_error");

});

Route::get("loginn",function (){
   return view("loginn");
});

Route::post("/loginn",function (Request $request){
   $productDescription=$request->mota;
   $price = $request->gianiemyet;
   $discountPrice = $request->chietkhau;
   $discountPercent = $price*$discountPrice*0.1;
   $discountAmount = $price - $discountPercent;
   return compact(["productDescription","price","discountAmount","discountPercent","discountPrice"]);
});


