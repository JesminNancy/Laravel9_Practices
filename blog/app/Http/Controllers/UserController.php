<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function index(){
      $data= Http::get('https://reqres.in/api/users?page=1');
      return view('users', ['data'=>$data['data']]);
   }

 function getData(){
     $data= Http::get('https://jsonplaceholder.typicode.com/posts')->collect();
     return view('fakeapi', ['data'=>$data]);
  }
}
