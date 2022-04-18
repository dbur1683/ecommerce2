<?php

use Illuminate\Support\Facades\Route;

use app\http\Controller\ProductController;

Route::get('/',function () {
    return view('welcome');
});

Route::get('product.register',[productControllerr::class,'register']) ;
Route::post('product.register',[productController::class,'store']) ;