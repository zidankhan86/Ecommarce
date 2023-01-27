<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show_login(){

        return view('backend.pages.login');
    }
    public function login_process(Request $request){
        // dd($request->all());
        $credentials=$request->except('_token');
        if( Auth::attempt($credentials)){
            return redirect()->route('home');
        }else{
            return redirect()->back();
        }
    }
public function registration(){

    return view('backend.pages.registration');
}
public function registration_create(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'password'=>'required']);

        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password),
            'role'=>"customer"

        ]);
        return redirect()->back();
}
}
