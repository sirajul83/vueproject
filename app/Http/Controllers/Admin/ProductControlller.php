<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Bands;
use App\Model\Category;
use App\Model\Product;
use App\Model\Color;
use Auth;
use App\User;
use Session;
use DB;
class ProductControlller extends Controller
{
   public function __construct()
	{
	    $this->middleware('auth');
	}
   public function product(){
   		$bands_data= Bands::all();
   		$product_data= Product::all();
   		$category = DB::table('categories')->get();
   		return view('product.product', compact('bands_data','category', 'product_data'));
   }
   public function save_product(Request $request){
   		

   		$year = date("Y");
    	$month= date("m");	
   		
   		$total_count = DB::table('products')
	     						->count();
	    $serial = $total_count+1;

		$serial_code =$this->product_key($serial);

    	$product_code = $year.$month.$serial_code;

    	$product_data =[

    			'name'=>$request->name,
    			'product_code'=>$product_code,
    			'bands_id'=>$request->bands,
    			'categori_id'=>$request->category,
    			'price'=>$request->price,
    			'quantity'=>$request->quantity,
    			'created_by'=> Auth::user()->id,
    			'created_by_ip'=>$request->ip()

    	];

  		$color_names = $request->color_ids;
   		$size = $request->size;

   		$color_size = array_merge($color_names, $size);
    	
    	$color_data = [];

    	foreach ($color_names as  $value) {
    		
    	    $color_item = [
    	    	'name'=>$value,
    	    	'product_code'=>$product_code,
    	    ];

    	    $color_data[] = $color_item;
    	  
    	}

  		// DB transactions start 

    	DB::beginTransaction();
		try {
			   
			$colors_store = DB::table('colors')->insert($color_data);
 
    		$product_store = DB::table('products')->insert($product_data);  

    		if($product_store){
    		
    		 echo json_encode(['status' => 'success', 'message' => 'Successfully added.', 'data' => []]);

		    }else{
		    		 echo json_encode(['status' => 'error', 'message' => 'Something Wrong.', 'data' => []]);
		    	}

			 DB::commit();
			    // all good
		} catch (\Exception $e) {
			    DB::rollback();
			    // something went wrong
		}

	    // DB transactions end 

    	
    	
   }

   public function product_key($x)
	{
			if(strlen($x)<=1){
				return '000'.$x;
			}
			else if(strlen($x)<=2){
				return '00'.$x;
			}
			else if(strlen($x)<=3){
				return '0'.$x;
			}
			else if(strlen($x)<=4){
				return $x;
			}
	}

	public function serial(){

		 $total_count = DB::table('products')
	     ->count();
	     $serial = $total_count+1;

		  $product_code =$this->product_key($serial);
	}


}
