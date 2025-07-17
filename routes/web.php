<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'index'])->name("homepage");
Route::get('/services',[UserController::class,'services'])->name("services");
Route::get('/shop',[UserController::class,'shop'])->name("shop");
Route::get('/about',[UserController::class,'about'])->name("about");
Route::get('/blog',[UserController::class,'blog'])->name("blog");
Route::get('/contact',[UserController::class,'contact'])->name("contact");
Route::get('/login',[UserController::class,'login'])->name("login");
Route::get('/register',[UserController::class,'register'])->name("register");
Route::get('/adminlogin',[UserController::class,'adminlogin'])->name("adminlogin");
Route::get('/panditlogin',[UserController::class,'panditlogin'])->name("panditlogin");
Route::get('/panditregister',[UserController::class,'panditregister'])->name("panditregister");