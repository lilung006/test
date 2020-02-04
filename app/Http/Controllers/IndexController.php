<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	$HW="HEllo World";
    	return view('index')->with('HW', $HW);
    }
}
