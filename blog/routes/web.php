<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view("store", "storeuser");
Route::post('/storem', [UserController::class, 'StoreM']);
