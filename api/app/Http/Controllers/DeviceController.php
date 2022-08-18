<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

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

    function update(Request $request){
        $device= Device::find($request->id);
        $device->name=$request->name;
        $device->member_id=$request->member_id;
        $result=$device->save();
        if($result){
            return ["result"=>"Update has been saved"];
        }
        else{
            return ["result"=>"Update failed"];
        }    
    }

    function delete($id){
        $device=Device::find($id);
        $result=$device->delete();
        if($result){
            return ["result"=>"Data has been deleted"];
        }
        else{
            return ["result"=>"Data Delete failed"];
        } 
    }

    function search($name){
        $result= Device::where("name", "like","%" .$name."%")->get();
        if(count($result)>0){
            return $result;
        }else{
            return ["result"=>"Data not Found"];
        }
    }

    function testData(Request $req){

        $rules=array(
            "member_id"=>"required | max:4",
            "name"=>"required"
        );
        $validator=Validator::make($req->all(),$rules);

        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            $device=new Device;
            $device->name=$req->name;
            $device->member_id=$req->member_id;
            $result=$device->save();
            if($result){
                return ["result"=>"Data has been saved"];
            }
            else{
                return ["result"=>"Data save failed"];
            }
        }
    }
}