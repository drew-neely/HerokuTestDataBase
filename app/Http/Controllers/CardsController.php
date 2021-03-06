<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{
    function index() {
    	$cards = Card::all();
    	return view('cards.index', compact('cards'));
    }

    function show(Card $card) {
    	//$card = Card::find($id);

    	return view('cards.show', compact('card'));
    }
}
