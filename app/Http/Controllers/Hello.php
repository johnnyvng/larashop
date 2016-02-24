<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Hello extends Controller
{
   	public function index() {
   		return 'Hello world again in Controller';
   	}

   	// Either way return the same result using array() or compact() func.
 /*	public function show($name) {
		return view('hello',array('name' => $name));
 	}*/
 	public function show($name) {
 		return view('hello', compact('name'));
 	}


}
