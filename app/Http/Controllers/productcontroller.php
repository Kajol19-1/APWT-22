<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productcontroller extends Controller
{

    //
    function list()
    {
        $products = Product::all();
        return view('product.list')->with('products',$products);
    } 
    function details(Request $req)
    {
        $products = Product::where('pid', '=', $req->pid)
                                ->select('name','pid','price')
                                ->first();
                                
        return view('product.details')
                    ->with('products', $products);
    }
   
    function create(){
        return view('product.create');
    }
    
    function createSubmit(Request $req){

        //$req->validate([],[]);
        $this->validate($req,
             [
                "name"=>"required|max:10",
                "pid"=>"required|max:20",
                "price"=>"required"
             ],
             [
                 "name.required"=> "Please provide the product name",
                 "name.max"=> "Name should not exceed 10 characters"
             ]
            );

            $p1 = new product();
            $p1->pid = $req->pid;
            $p1->name = $req->name;
            $p1->price = $req->price;
            $p1->save(); //insert query will run

        return "Submitted with valid value";
    }
    
}
