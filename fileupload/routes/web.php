<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('upload','upload');
Route::post('upload',[UploadController::class,'FileUpload']);
Route::get('list',[UserController::class,'showData']);