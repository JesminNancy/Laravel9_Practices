<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
  return view('welcome');
});

Route::view('login','users');
Route::post('/users',[UserController::class,'testRequest']);