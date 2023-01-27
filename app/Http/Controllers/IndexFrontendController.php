<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexFrontendController extends Controller
{
    public function home(){

        return view('frontend.pages.home');
    }
    
    public function main_home(){
        return view('frontend.pages.mainhome.main');
    }
}
