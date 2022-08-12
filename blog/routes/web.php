<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class,'index']);
Route::get('/member', [MemberController::class,'updateMut']);

// Query Builder....
Route::get('/list', [MemberController::class,'operations']);
Route::get('/memberlist', [MemberController::class,'InsertUpdateDelete']);