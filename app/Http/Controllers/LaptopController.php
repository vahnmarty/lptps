<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function recommendation()
    {
    	return view('recommendation');
    }

    public function generateRecommendation(Request $request){
    	$laptops = [1,2,3];
    	return view('show-recommendation', compact('laptops'));
    }
}
