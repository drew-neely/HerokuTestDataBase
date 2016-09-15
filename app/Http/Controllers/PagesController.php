<?php

namespace App\Http\Controllers;

//	use Illuminate\Http\Request;

//use App\Http\Requestts;

class PagesController extends Controller
{
    public function home() {
    	$people = ["Me", "Myself", "I"];
    	return view('welcome', compact('people'));
    }

    public function about() {
    	return view('pages.about');
    }
}
