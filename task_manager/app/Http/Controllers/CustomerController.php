<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showAll()
    {
        $customers = DB::table("customers")->get();
        return view("shop-phone.list", compact("customers"));
    }

    public function getById($id)
    {
        $customer = DB::table("customers")->where("id", $id)->first();
        return view("shop-phone.detail", compact("customer"));
    }

    public function create()
    {
        return view("shop-phone.create");
    }

    public function store(Request $request)
    {
        $data = $request->only("name","phone","email","user_id");
        DB::table("customers")->insert($data);
        return redirect()->route("customer_list");
    }

    public function delete($id)
    {
        DB::table("customers")->where("id",$id)->delete();
        return redirect()->route("customer_list");
    }

    public function edit($id)
    {
    $customer = DB::table("customers")->where("id",$id)->first();
    return view("shop-phone.update", compact(["id","customer"]));
    }

    public function update(Request $request, $id)
    {
    $data = $request->only("name","phone","email","user_id");
    $update = DB::table("customers")->where("id",$id)->update($data);
        return redirect()->route("customer_list");
    }
}
