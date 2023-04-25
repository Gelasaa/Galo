<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\galo;

Route::get('/', function () {

    return redirect('about');
    return view('welcome');
});
Route::get("users",[users::class,'index']);


//Route::get("users",'users');
Route::view("galo",'galo');
Route::get("galo",[galo::class, 'galo']);

