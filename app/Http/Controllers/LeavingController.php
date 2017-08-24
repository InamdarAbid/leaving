<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeavingController extends Controller
{
    public function home(){
        return view('pages.homepage');
    }

    public function displayCont(){
        return view('pages.displaypage');
    }
}
