<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UserController extends Controller
{
    function showData(){
        $data =member::all();
        return view('list',['member'=>$data]);
    }
}