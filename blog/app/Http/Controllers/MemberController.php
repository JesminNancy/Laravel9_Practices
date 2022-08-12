<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
    function updateMut(){

        $member= new Member();
        $member->name='jesmin';
        $member->email='jesmin@gmail.com';
        $member->city='Dhaka'; 
        $member->save();
    }
}