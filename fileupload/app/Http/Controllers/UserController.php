<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UserController extends Controller
{
    function showData(){
        $data =member::paginate(5);
        return view('list',['members'=>$data]);
    }
}