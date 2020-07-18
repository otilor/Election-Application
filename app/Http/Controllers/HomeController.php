<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
	// Only guests can view this.
	public function __construct()
	{
		
	}

    //
    public function index() {
    	if ( auth()->check() )
    	{
    		dump ( auth()->user()->permissions );
    		return view('home');
    	} 
    	else 
    	{
    		return view('welcome');
    	}
    	
    }
}
