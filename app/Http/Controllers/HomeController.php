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
            // Goes to the roles table and find the role of the current user (returns an array)
            // Then use the first index of the array
    		return view(auth()->user()->roles->pluck('name')[0] . '.index');
    	} 
    	else 
    	{
    		return view('welcome');
    	}
    	
    }
}
