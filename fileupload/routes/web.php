<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;


Route::get('/', function () {
    return view('welcome');
});

//File Upload...
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'FileUpload']);


//Show Data in Database Table
Route::get('list',[UserController::class,'showData']);

// Add Member....
Route::view('add','addmember');
Route::post('add',[MemberController::class,'addData']);