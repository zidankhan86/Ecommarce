<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_form(){

        return view('backend.pages.category.categoryForm');
    }
    public function category_store(Request $request){

        $request->validate([

        'name'=>'required','type'=>'required'
    ]);
    Category::create([
   'name'=>$request->name,
   'type'=>$request->type

    ]);
    return redirect()->back();
 }

}
