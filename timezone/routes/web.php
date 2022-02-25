<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/{timezone?}',function ($timezone = null){
    if (!empty($timezone)){
        $time = new DateTime(date("Y-m-d H:i:s"),new DateTimeZone("UTC"));
        $time->setTimezone(new DateTimeZone(str_replace('-','/',$timezone)));
        echo "mui gio ban chon " . $timezone . "hien dang la " . $time->format("d-m-Y H:i:s");
    }
    return view('index');
});
