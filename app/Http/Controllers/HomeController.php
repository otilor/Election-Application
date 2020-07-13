<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	// Only guests can view this.
	public function __construct()
	{
		$this->middleware('guest');
	}

    //
    public function index() {
    	return view('welcome');
    }
}
