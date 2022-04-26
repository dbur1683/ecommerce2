<?php

use Illuminate\Support\Facades\Route;

use app\http\Controller\ProductController;

Route::get('/',function () {
    return view('welcome');
});

Route::get('/product/register',[ProductController::class,'register'])->name('product/register');
Route::post('product.register',[ProductController::class,'store'])->name('product/register');

