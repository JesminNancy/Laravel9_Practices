<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{

    function addData(Request $request){
        $device= new Device;
        $device->name=$request->name;
        $device->member_id=$request->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Data has been saved"];
        }
        else{
            return ["result"=>"Data save failed"];
        }

        
    }
}