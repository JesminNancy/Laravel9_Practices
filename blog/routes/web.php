<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employeeontroller;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$string="we are learning laravel 9";
// $string =Str::ucfirst($string);
// $string=Str::replaceFirst('We', 'They', $string);
// $string=Str::camel($string);

$string=Str::of($string)
            ->ucfirst($string)
            ->replaceFirst('We', 'They', $string)
            ->camel($string);
echo $string;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[Employeeontroller::class,'getData']);
Route::get('data',[MemberController::class,'index']);
Route::get('datadevice',[MemberController::class,'ShowData']);