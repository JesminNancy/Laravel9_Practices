<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function FileUpload(Request $req){
        return $req->file('file')->store('img');
    }
}