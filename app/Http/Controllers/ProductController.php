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
        'quantity'=>'required',
        'price'=>'required'

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
            'quantity'=>$request->quantity,
            'price'=>$request->price


        ]);
        return redirect()->back();

    }
    public function mens_products(){

        return view('frontend.pages.men.men');
    }


    public function women_products(){

        return view('frontend.pages.women.women');
    }

    public function kids_products(){

        return view('frontend.pages.kids.kids');
    }


}
