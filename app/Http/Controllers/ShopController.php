<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_form(){

return view('backend.pages.shopForm');

    }
    public function shop_store(Request $request){[
        'name'=>'required',
        'contract'=>'required',
        'address'=>'required',
        'image'=>'required',
        'about'=>'required'

    ];
    $imageName=null;
    if($request->hasFile('image')){
        $imageName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads',$imageName);
    }
    Shop::create([

            'name'=>$request->name,
            'contract'=>$request->contract,
            'address'=>$request->address,
            'image'=>$request->image,
            'about'=>$request->about


    ]);
    return redirect()->back();

}
public function shop_list(){
    $shop=Shop::all();

    return view('backend.pages.shopList',compact('shop'));
}

}
