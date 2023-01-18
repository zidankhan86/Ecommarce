<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('backend.pages.product');
    }

    public function product_list(){
       $products=Product::all();
        return view('backend.pages.productList',compact('products'));

    }

    public function product_store(Request $request){

        $request->validate([

        'name'=>'required',
        'details'=>'required',
        'image'=>'required',
        'quantity'=>'required'

        ]);

        $imageName=null;
        if($request->hasFile('image')){
            $imageName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$imageName);
        }

         Product::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$imageName,
            'quantity'=>$request->quantity

        ]);
        return redirect()->back();

    }

}
