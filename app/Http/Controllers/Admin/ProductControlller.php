<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Bands;
use App\Model\Category;
use App\Model\Product;
use App\Model\Color;
use Session;
use DB;
class ProductControlller extends Controller
{
   public function product(){
   		$bands_data= Bands::all();
   		$product_data= Product::all();
   		$category = DB::table('categories')->get();
   		return view('product.product', compact('bands_data','category', 'product_data'));
   }
   public function save_product(Request $request){
   		
   		$product_store = new Product;
    	$product_store->name = $request->name;
    	$product_store->price = $request->price;
    	$product_store->quantity = $request->quantity;


    	//$color_store = new Color;
    	$color_store = $request->color_ids;


    

    	foreach ($color_store as  $value) {
    		
    	    $c_data = [
    	    	'name'=>$value,
    	    ];
    	  

    	$colors_data = DB::table('colors')->insert($c_data);
    	}
    	
    	// echo "<pre>";
    	// print_r($product_store);exit();
    	$stote =	$product_store->save();

    	if($stote){
    		 echo json_encode(['status' => 'success', 'message' => 'Successfully added.', 'data' => []]);
    	}else{
    		 echo json_encode(['status' => 'error', 'message' => 'Something Wrong.', 'data' => []]);
    	}
    	
   }
}
