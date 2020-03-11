<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use Session;
use DB;
class CategoryController extends Controller
{
    public function category()
    {

    	$category = DB::table('categories')->get();
    	return view('category.category', compact('category'));
    }

    public function save_category(Request $request)
    {
    	$request->validate([
        'name' => 'required|max:255',
        'status' => 'required',
   		 ]);

    	$category_data =array();
    	$category_data['name']  = $request->name;

    	$category_data['status']  = $request->status;

    	$category = DB::table('categories')->insert($category_data);
    	if($category){
    		return redirect()->back();
    	}

    }
}
