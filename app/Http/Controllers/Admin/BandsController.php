<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandsController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}
    public function bands(){
    	return view('bands.bands');
    }
}
