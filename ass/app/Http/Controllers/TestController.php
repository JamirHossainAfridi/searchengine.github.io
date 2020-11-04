<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    
    public function test(){

        return view('test');
    }
    public function Search($search1,$fname)
    {
       
    
        $userList = User::where($search1, $fname)->get();
 
    return response()->json($userList);
    }
   public function Search2($search1,$fname,$search2,$fname2)
    {

        $userList1 = User::where($search1, $fname)->where($search2, $fname2)->get();

        return response()->json($userList1);
    }
    public function SearchFinal($search1,$fname,$search2,$fname2,$search3,$fname3)
    {

        $userList1 = User::where($search1, $fname)->where($search2, $fname2)->where($search3, $fname3)->get();

        return response()->json($userList1);
    }

    
}
