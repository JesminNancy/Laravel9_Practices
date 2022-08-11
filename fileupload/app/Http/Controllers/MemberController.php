<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
   function addData(Request $request){
        $member = new Member;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->city=$request->city;
        $member->save();
        return redirect('add');
   }

   function delete($id){
    $data=Member::find($id);
    $data->delete();
    return redirect('list');
   }
}