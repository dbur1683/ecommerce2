<?php
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

Route::get('/',function () {
    return view('welcome');
});

Route::get('/category/register',[categoryController::class,'register'])->name('category/register');
Route::post('category.register',[categoryController::class,'store'])->name('category/register');

