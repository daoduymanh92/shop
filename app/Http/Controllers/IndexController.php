<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class IndexController extends Controller
{
    //
    /*
	* get all Product for Index Page
    */
    public function index() {
    	$products = Product::where('status', Product::ACTIVE)
    						->get();
    	// dd($products);
    	return view('index')->with('products', $products);
    }
}
