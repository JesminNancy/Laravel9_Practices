<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function StoreM(Request $req)
    {
      $data= $req->input('username');
       $req->session()->flash('username', $data);
       return redirect('store');
    }
}
