<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Bands;
use Session;
use DB;
class BandsController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}
    public function bands(){
    	
    	$bands_data= Bands::all();
    	return view('bands.bands', ['bands_data'=>$bands_data]);
    }
    public function save_bands(Request $request)
    {

    	$bands_store = new Bands;
    	$bands_store->name = $request->name;
    	$bands_store->status = $request->status;

    	 $bands_store->save();
    	// if($save)
    	// {
    		// return json_encode(["status" => "success", "message" => "Bands Add successfuly.", "data" => []]);
    	 $msg = "This is a simple message.";
         return response()->json(array('msg'=> $msg), 200);
    	//}

    }
}
