<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function register(){
    return view('product.register');
}
use App\Http\models;
public function store(request $request){
    $product=new product();
    $product->name=$request->name;
    $product->unit=$request->unit;
    $product->price=$request->price;
    $product->quantity=$request->quantity;
    $is_successed=$product::save();
    if($is_successed)
    echo 'record saved successfully';
    else
    echo 'something went wrong try agein';
}
}