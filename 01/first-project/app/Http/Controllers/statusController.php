<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\status;

class statusController extends Controller
{
    public function home()
    {
    	$stat=status::all();
    	// $stat=DB::table('statuss')->get();
    	return view('welcome',compact('stat'));

    }

    // public function show( $id)
    // {
    // 	$statt=status::find($id);
    // 	return $statt;
    // }
     public function show( $id)
    {
    	$statt=status::find($id);
    	return view('show', compact('statt'));
    }
}
