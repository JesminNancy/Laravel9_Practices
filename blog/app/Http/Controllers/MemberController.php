<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;


class MemberController extends Controller
{
    function updateMut(){

        $member= new Member();
        $member->name='jesmin';
        $member->email='jesmin@gmail.com';
        $member->city='Dhaka'; 
        $member->save();
    }


    function operations(){

        // return DB::table('members')->count();
        return DB::table('members')->find(6);
        // ->where('id', 4)
        // ->get();  
    }

    function InsertUpdateDelete(){

      return DB::table('members')
    //   ->insert([
    //     'name' => 'Mukta',
    //     'email' => 'm@test.com',
    //     'city' => 'Feni',
    //   ]);
      ->where ('id', 13)
       ->insert([
         'name' => 'Mukta Meem',
         'email' => 'mukta@test.com',
         'city' => 'Feni',
      ]); 
   
    }
}