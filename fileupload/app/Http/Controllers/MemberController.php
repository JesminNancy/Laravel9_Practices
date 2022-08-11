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

   function getData($id){
    $data=Member::find($id);
    return view('edit',['data'=>$data]);
   }

   function update(Request $request){
    $data=Member::find($request->id);
    $data->name=$request->name;
    $data->email=$request->email;
    $data->city=$request->city;
    $data->save();
    return redirect('list');
   }
}