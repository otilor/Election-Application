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
    		$permission = Permission::create(['name' => 'view contestants']);
    		auth()->user()->givePermissionTo($permission);
    		// dump (auth()->user()->permissions);
    		return view('home');
    	} 
    	else 
    	{
    		return view('welcome');
    	}
    	
    }
}
