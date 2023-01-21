<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show_login(){

        return view('backend.pages.login');
    }
    public function login_process(Request $request){

        $credentials=$request->except('_tocken');
        if( Auth::attempt($credentials)){

            return redirect()->back();
        }
    }

}
