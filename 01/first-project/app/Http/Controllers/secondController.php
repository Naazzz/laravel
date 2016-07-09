<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class secondController extends Controller
{
	public function home(){
		
    $arr=['naz','rahim','lel','inar'];
	return view('first',['var' => $arr]);
	}

	public function about(){
	$arr=['naz','rahim','lel','inar'];
	return view('about',['var' => $arr]);
	}
}
