<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Product;

class ProductController extends Controller
{
    function list(){
       // return DB::table('members')->get();
        // return DB::connection('mysql2')->table('products')->get();
       // return Member::all();
        return Product::all();
    }
}