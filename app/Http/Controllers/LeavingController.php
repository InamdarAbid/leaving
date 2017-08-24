<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;// for direct queries

class LeavingController extends Controller
{
    public function home(){
        return view('pages.homepage');
    }

    public function displayCont(Request $request){
        $temp =  $request->input('uid');
        $data = DB::select("SELECT * FROM student where uid = $temp");
        return view('pages.displaypage')->with('data',$data);
    }
}
