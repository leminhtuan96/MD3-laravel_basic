<?php

use App\Http\Controllers\CustomerController;
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
//
//Route::prefix('customer')->group(function (){
//    Route::get("index",function (){
//       return view("modules.customer.index");
//    });
//
//    Route::get("create",function (){
//
//    });
//
//    Route::post("store",function (){
//
//    });
//
//    Route::get("{id}/show",function (){
//
//    });
//
//    Route::get("{id}/edit",function (){
//
//    });
//
//    Route::patch("{id}/update",function (){
//
//    });
//
//    Route::delete("{id}",function (){
//
//    });
//});

Route::prefix("/customer")->group(function (){
    Route::get("/",[CustomerController::class,"showAll"])->name("customer_list");

    Route::get("/{id}/detail",[CustomerController::class,"getById"])->name("customer_detail");

    Route::get("/create",[CustomerController::class,"create"])->name("customer_create");

    Route::post("/create",[CustomerController::class,"store"])->name("customer_store");

    Route::get("{id}/edit",[CustomerController::class,"edit"])->name("customer_edit");

    Route::post("{id}/edit",[CustomerController::class,"update"])->name("customer_update");

    Route::get("{id}/delete",[CustomerController::class,"delete"])->name("customer_delete");

});



