<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	// Only guests can view this.
	public function __construct()
	{
		// $this->middleware('auth');
	}

    //
    public function index() {
    	if ( auth()->check() )
    	{
    		return view('home');
    	} 
    	else 
    	{
    		return view('welcome');
    	}
    	
    }
}
