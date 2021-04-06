<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios',[UserController::class,'index']);
Route::get('usuarios/{id}',[UserController::class,'show']);
