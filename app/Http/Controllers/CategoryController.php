<?php


namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
public function register(){
    return view('category.register');

 function store(request $request) 
{
    $category=new category();
    $category->id=$request->id;
    $category->name=$request->name;
    $is_successed=$category::save();
    if($is_successed)
    echo 'record saved successfully';
    else
    echo 'something went wrong try agein';
}
}
}