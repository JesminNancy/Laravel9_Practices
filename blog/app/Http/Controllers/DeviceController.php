<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Company;

class DeviceController extends Controller
{
    // function list(Device $key=null){
    //     return $key?Device::find($key):Device::all();   
    // }

    function list($id=null){
        return $id?Device::find($id):Device::all();   
    }
}