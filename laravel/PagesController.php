<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function contact(){
		$people = [

		];
		return view('contact',compact('people'));
	}
	
}
