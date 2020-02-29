<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    public function index()
    {
        return view('pages.home');
    }
}
