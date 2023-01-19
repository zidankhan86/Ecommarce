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
 public function delete_category($id){
    $delete=Category::find($id);
    $delete->delete;

    return redirect()->back();

 }
 public function category_list(){
    $category=Category::all();

return view('backend.pages.category.categoryList',compact('category'));

}

}
